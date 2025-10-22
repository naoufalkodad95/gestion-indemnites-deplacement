<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deplacement;
use App\Models\Mission;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return 'admin';
      
        // Nombre total de missions effectuées
        $totalMissions = Mission::count();

        // Les employés ayant le plus de missions effectuées
        $employesPlusMission = Deplacement::select('deplacements.nom', 'deplacements.prenom', DB::raw('COUNT(missions.id) AS total_missions'))
            ->join('missions', 'deplacements.id', '=', 'missions.deplacement_id')
            ->groupBy('deplacements.id', 'deplacements.nom', 'deplacements.prenom')
            ->orderByDesc('total_missions')
            ->limit(5)
            ->get();

        // Nombre total de demandes de déplacement soumises
        $totalDemandes = Deplacement::count();

        // Montant total des frais de déplacement engagés
        $montantTotalFrais = Deplacement::select(DB::raw('sum(missions.montant) AS Montant_total_des_frais_de_deplacement_engages'))
            ->join('missions', 'deplacements.id', '=', 'missions.deplacement_id')
            ->first()
            ->Montant_total_des_frais_de_deplacement_engages;


         // Montant total des frais de déplacement engagés par mois au cours des 12 derniers mois
        $months = collect();
        for ($i = 0; $i < 12; $i++) {
            $month = Carbon::now()->subMonths($i)->format('M Y');
            $montant = Deplacement::join('missions', 'deplacements.id', '=', 'missions.deplacement_id')
                ->whereYear('periode_debut', Carbon::now()->subMonths($i)->year)
                ->whereMonth('periode_debut', Carbon::now()->subMonths($i)->month)
                ->sum('missions.montant');
            $months->push(['month' => $month, 'montant' => $montant]);
        }
        $months = $months->reverse();

        // Nombre d'employés
        $nombreEmployes = DB::table('deplacements')
                ->select(DB::raw('count(distinct n_ordre) as nombre'))
                ->get();


        return view('admin.dashboard', compact('totalMissions', 'employesPlusMission', 'totalDemandes', 'montantTotalFrais','months','nombreEmployes'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->back()->with('success', 'User created successfully.');    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


  
}
