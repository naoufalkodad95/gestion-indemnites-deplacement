<x-admin-layout>
    {{-- <x-slot name="header" >
        <h2 class=" font-semibold  text-xl text-gray-800 dark:text-gray-200 leading-tight">
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
                                    <div  class="col-md-2 ">
                                        <img src="/images/ORMVAM-removebg.png" class="img-learning float-left" width="80">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach           
                                        </ul>
                                    </div>
                                @endif
                                <form method="post" action="/deplacement/ {{$missionJoin[0]->id }}">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}                                     
                                    <div class="row">
                                        <div class="col-md-4">
                                            periode_debut : <input name="periode_debut" value="{{ date('Y-m-d',strtotime($missionJoin[0]->periode_debut ))}} ">
                                            periode_fin    :    <input name="periode_fin" value="  {{ date('Y-m-d',strtotime($missionJoin[0]->periode_fin))}}">
                                                            <br><br>
                                            Nom :<input name="nom" value="{{ $missionJoin[0]->nom }}  "><br><br>
                                            Prénom:<input name="prenom" value="{{ $missionJoin[0]->prenom }}" ><br><br>
                                            Grade : <input name="grade" value="{{$missionJoin[0]->grade}}"><br><br>
                                        </div>
                                        <div class="col-md-4">
                                            Exercice :  <input name="exercice" class="card-text" value="{{$missionJoin[0]->exercice}}"> <br><br>                             
                                            Residence : <input name="residence" class="card-text"value="{{$missionJoin[0]->residence}}"> 
                                        </div>
                                        <div class="col-md-4">
                                            <table class="table table-bordered border-dark" >
                                                <tr>    
                                                    <th>N° ordre</th> 
                                                    <td><input name="n_ordre" class="form-control" value="{{$missionJoin[0]->n_ordre }}"></td>
                                                </tr>
                                                <tr>
                                                    <th>Matricule</th>
                                                    <th><input name="matricule" class="form-control" value="{{ $missionJoin[0]->matricule }}"> </th>
                                                </tr>
                                                <tr> 
                                                    <th>Service</th>            
                                                        <th>
                                                            <select name="service" class="form-control"  >
                                                                <option value="{{$missionJoin[0]->service }}" >{{$missionJoin[0]->service }} </option>
                                                                <option value="SPP">Service de la Planification et de la Programmation (S.P.P)</option>
                                                                <option value="SAF">Service Administratif et Financier (S.A.F)</option>
                                                                <option value="SM">Service du Matériel (S.M)</option>
                                                                <option value="SE">Service de l'Elevage (S.E)</option>
                                                                <option value="SER">Service de l'Equipement Rural (S.E.R)</option>
                                                                <option value="SVO">Service de la Vulgarisation et de l'Organisation Professionnelle (S.V.O)</option>
                                                                <option value="SGRID">Service de la Gestion des Réseaux d'Irrigation et de Drainage (S.G.R.I.D)</option>
                                                                <option value="SPA">Service de la Production Agricole (S.P.A)</option>
                                                            </select>
                                                        </th>
                                                </tr>                                                         
                                            </table>
                                        </div>
                                    </div>
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>Date de la mission</th>
                                            <th>Destination</th>
                                            <th>Heur Départ</th>
                                            <th>Heur Retour</th>
                                            <th>les repas</th>
                                            <th>Montant</th>

                                        </tr>
                                        @foreach($missionJoin as $key=>$item)
                                            <tr>
                                                <td><input type="text" class="form-control" name="date_mission"  value=" {{  date('Y-m-d',strtotime($item->date_mission))}}" /></td>
                                                <td><input type="text" class="form-control" name="destination" value="{{ $item->destination }}" /> </td>
                                                <td><input type="time" class="form-control" name="heure_depart" value="{{ $item->heure_depart }}" /></td>
                                                <td><input type="time" class="form-control" name="heure_retour" value="{{ $item->heure_retour }}" /></td>
                                                <td> <input type="number" class="form-control" name="repas" min="1" max="3" value="{{ $item->repas }}" /> </td>
                                                <td><input type="number" class="form-control" name="montant" min="40" max="300"  value="{{ $item->montant }}" /></td>
                                            </tr>                                    
                                        @endforeach
                                    </table>
                                    <button type="submit"  class="btn btn-outline-primary btn-sm ">Modifier</button>

                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>                
</x-admin-layout>




    
