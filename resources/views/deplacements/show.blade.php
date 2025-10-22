<x-admin-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin_Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
               

  
<div class="card" style="margin:20px;">
    <div class="card-header " >
        <div class="row">
            
            <div class="col-md-10 ">
                <p class="fw-bold"> OFFICE REGIONALE DE MISE EN VALEUR <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; AGRICOLE DE LA MOULOUYA <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       BERKANE</p>

            </div>

            {{-- <div  class="col-md-10  ">
                <img src="/images/télécharger-removebg-preview.png" class="img-learning float-right" width="200">
            </div> --}}
            <div  class="col-md-2 ">
                <img src="/images/ORMVAM-removebg.png" class="img-learning float-left" width="80">
                
            </div>
        </div>
    </div>
        <div class="card-body">
            <div class="card-body">
                <h3 class=" text-center" >Etat des Indemnites De Deplacement</h3><br>
                        <div class="row">
                            <div class="col-md-4">
                                    <p class="card-text">Période :{{ date('F',strtotime($missionJoin[0]->periode_debut ))}}  <span class="fw-bold">jusqu'a </span>  {{ date('F',strtotime( $missionJoin[0]->periode_fin))	 }}</td></p>
                                    <p class="card-text">Nom & Prénom:{{ $missionJoin[0]->nom }}&emsp;{{ $missionJoin[0]->prenom }}</td> </p>
                                    <p class="card-text">Grade :  {{$missionJoin[0]->grade}}</p>                                  
                            </div>
                            <div class="col-md-4">
                                    <p class="card-text">Exercice : {{$missionJoin[0]->exercice}} </p>                                      
                                    <p class="card-text">Residence : {{$missionJoin[0]->residence}} </p>
                            </div>
                            <div class="col-md-2">
                                <table class="table table-bordered border-dark" >
                                    <tr><th>N°ordre</th> <td>{{$missionJoin[0]->n_ordre }}</td></tr>
                                    <tr><th>Matricule</th> <td>{{ $missionJoin[0]->matricule }}</td> </tr>
                                    <tr> <th>Service</th><td>{{ $missionJoin[0]->service }} </td></tr>
                                         
                                </table>
                            </div>
                        </div> 
                <table  class="table table-bordered border-dark">
                    <thead class="table-dark">
                        <tr >
                            <th scope="col" >Date de la mission </th>
                            <th scope="col">Destination </th>
                            <th scope="col">Heure de départ </th>
                            <th scope="col">Heure d'arrivée </th>
                            <th scope="col">Repas</th>
                            <th scope="col">Montant </th>                           
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($missionJoin as $key=>$item)
                            <tr>
                                <td scope="row">{{ date('d F,Y',strtotime($item->date_mission)) }}</td>
                                <td scope="row">{{ $item->destination }}</td>
                                <td scope="row">{{ $item->heure_depart }}</td>
                                <td scope="row">{{ $item->heure_retour  }}</td>
                                <td scope="row">{{ $item->repas}}</td>
                                <td scope="row">{{ $item->montant }}</td>

                            </tr>
                        
                        @endforeach
                    </tbody>

                </table>
          
            </div>
        </div>
</div>
</div>
</div>
</div>
</div>
</x-admin-layout>