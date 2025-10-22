<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deplacement; //add Deplacement Model - Data is coming from the database via Model.
use App\Models\Mission;
use Illuminate\Support\Facades\DB;




class DeplacementController extends Controller
{
    public function recherche(Request $request)
    {
        $rechercheNorder = $request->input('recherche');
        $deplacements = Deplacement::where('n_ordre', $rechercheNorder)
            ->orWhere('nom', $rechercheNorder )
            ->orWhere('prenom', $rechercheNorder )
            ->orWhere('matricule', $rechercheNorder)
            ->paginate(6);
    
        return view('deplacements.index')->with('deplacements', $deplacements);
    }
    
    // public function chercheService(Request $request)
    // {
    //     $service = $request->input('service');
    
    //     $deplacements = Deplacement::where('service', $service)->paginate(6);
    
    //     return view('deplacements.index')->with('deplacements', $deplacements);
    // }
    

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deplacements = Deplacement::paginate(6);
        return view('deplacements.index')->with('deplacements', $deplacements);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('deplacements.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
  public function store(Request $request)
        {
            // Validate form data
            $request->validate([
                'exercice' => 'required|numeric',
                'residence' => 'required|string',
                'n_ordre' => 'required|numeric',
                'matricule' => 'required|numeric',
                'grade' => 'required|string',
                'nom' => 'required|string',
                'prenom' => 'required|string',
                'service' => 'required|string',
                'periode_debut' => 'required|date',
                'periode_fin' => 'required|date',
                'inputs.*.date_mission' => 'required|date',
                'inputs.*.destination' => 'required|string',
                'inputs.*.heure_depart' => 'required',
                'inputs.*.heure_retour' => 'required',
                'inputs.*.repas' => 'required|numeric|min:1|max:3',
                'inputs.*.montant' => 'required|numeric|min:40|max:300',
            ]);
            // Save deplacement to the database
            $deplacement = Deplacement::create([
                'exercice' => $request->input('exercice'),
                'residence' => $request->input('residence'),
                'n_ordre' => $request->input('n_ordre'),
                'matricule' => $request->input('matricule'),
                'grade' => $request->input('grade'),
                'nom' => $request->input('nom'),
                'prenom' => $request->input('prenom'),
                'service' => $request->input('service'),
                'periode_debut' => $request->input('periode_debut'),
                'periode_fin' => $request->input('periode_fin'),
            ]);
            // Save each mission to the database
            foreach ($request->input('inputs') as $input) {
                $mission = new Mission;
                $mission->date_mission = $input['date_mission'];
                $mission->destination = $input['destination'];
                $mission->heure_depart = $input['heure_depart'];
                $mission->heure_retour = $input['heure_retour'];
                $mission->repas = $input['repas'];
                $mission->montant = $input['montant'];
                $mission->deplacement_id = $deplacement->id;
                $mission->save();
            }
            return redirect()->back()->with('success', 'Indemnités de déplacement enregistrées avec succès !');
        }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
public function show($deplacement_id)
{
    $missionJoin = DB::table('missions')
    ->join('deplacements','missions.deplacement_id','=','deplacements.id')
    ->select('missions.*','deplacements.*')
    ->where('deplacement_id',$deplacement_id)
    ->get();
    return view('deplacements.show', compact( 'missionJoin'));
}
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($deplacement_id)
    {
        $missionJoin = DB::table('missions')
        ->join('deplacements','missions.deplacement_id','=','deplacements.id')
        ->select('missions.*','deplacements.*')
        ->where('deplacements.id',$deplacement_id)
        ->get();
    return view('deplacements.edit', compact( 'missionJoin'));   
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
public function update(Request $request, $deplacement_id)
{
    $this->validate($request, [
        'n_ordre.*' => 'required|numeric',
        'matricule.*' => 'required|numeric',
        'grade.*' => 'required|max:255',
        'nom.*' => 'required|max:255',
        'prenom.*' => 'required|nmax:255',
        'service.*' => 'required|max:255',
        'exercice.*' => 'required|max:255',
        'residence.*' => 'required|max:255',
        'periode_debut.*' => 'required|date_format:H:i',
        'periode_fin.*' => 'required|date_format:H:i',

        'date_mission.*' => 'required|date',
        'destination.*' => 'required|max:255',
        'heure_depart.*' => 'required|date_format:H:i',
        'heure_arrivee.*' => 'required|date_format:H:i',
        'repas.*' => 'required|numeric|min:1|max:3',
        'montant.*' => 'required|numeric|min:40|max:300',
    ]);
    
    $deplacement = Deplacement::find($deplacement_id);
    $deplacement->update($request->all());  
    
    $missions = Mission::where('deplacement_id', $deplacement_id)->get();
    foreach ($missions as $mission) {
        $mission->update($request->all());
    }
    return redirect('deplacement')->with('success', 'Deplacement modifié avec succès.');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Deplacement::destroy($id);
        return redirect('deplacement')->with('flash_message', 'Deplacement deleted!');  
    }


  
    
}