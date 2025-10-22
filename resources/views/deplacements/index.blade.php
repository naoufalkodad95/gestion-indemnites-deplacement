<x-admin-layout>
    <x-slot name="header" >
        <h2 class=" font-semibold  text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin_Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="row">
                        <div class="col-md-6">

                            <a href="{{ url('deplacement/create') }}" class=" btn btn-primary mb-2">Ajouter une Deplacement</a>
                        </div>
                        <div class="col-md-6 ">

                            <form class="d-flex" method="post" action="{{ route('recherche') }}">
                                @csrf
                                <input class="form-control mr-sm-2" name="recherche" type="search" placeholder="Search N-Order / matricule / nom / prenom">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </div>    
                          
                    </div>      
    

                    {{-- 
                    <form class="form-inline" method="POST" action="{{ route('chercheService') }}">
                        @csrf
                    
                        <select name="service" class="form-select" id="inputGroupSelect03" aria-label="Default select example">
                            <option value="" selected>Choisir un Service</option>
                            @foreach ($deplacements as $item)
                                <option value="{{ $item->service }}">{{ $item->service }}</option>
                            @endforeach
                        </select>
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                    </form> --}}
                    
                    <table class="table">
                        <thead>
                            <tr>
                                {{-- <th scope="col">#</th> --}}
                                <th scope="col">Exercice</th>
                                <th scope="col">Residence</th>
                                <th scope="col">N° d'ordre</th>
                                <th scope="col">Matricule</th>
                                <th scope="col">Grade</th>
                                <th scope="col">Nom et prénom</th>
                                <th scope="col">Service</th>
                                <th scope="col">periode_debut</th>
                                <th scope="col">periode_fin</th>
                                {{-- <th scope="col">Date de mission</th>
                                <th scope="col">Destination</th>
                                <th scope="col">Heure de départ</th>
                                <th scope="col">Heure de retour</th>
                                <th scope="col">Repas</th>
                                <th scope="col">Montant</th> --}}
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($deplacements as $item)
                                <tr>
                                    {{-- <th scope="row">{{ $item->id }}</th> --}}
                                    <td>{{ $item->exercice }}</td>
                                    <td>{{ $item->residence }}</td>
                                    <td>{{ $item->n_ordre }}</td>
                                    <td>{{ $item->matricule }}</td>
                                    <td>{{ $item->grade }}</td>
                                    <td>{{ $item->nom }} {{ $item->prenom }}</td>
                                    <td>{{ $item->service }}</td>
                                    <td>{{ $item->periode_debut }} </td>
                                    <td>{{ $item->periode_fin }} </td>
                                    {{-- <td>{{ $item->date_mission }}</td>
                                    <td>{{ $item->destination }}</td>
                                    <td>{{ $item->heure_depart }}</td>
                                    <td>{{ $item->heure_retour }montant}</td>
                                    <td>{{ $item->repas }}</td>
                                    <td>{{ $item->montant }}</td> --}}
                                    <td>
                                        <div class="btn-group " role="group" aria-label="Basic outlined example">
                                        

                                            <a href="{{ url('/deplacement/' . $item->id) }}" title="View Deplacement"><button class="btn btn-outline-warning btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/deplacement/' . $item->id . '/edit') }}" title="Edit Deplacement"><button class="btn btn-outline-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>


                                            <form  method="POST" action="{{ url('deplacement'.'/'. $item->id) }}"accept-charset="UTF-8" style="display:inline">
                                                @csrf
                                                @method('DELETE')
                                                {{-- {{ method_field('DELETE') }}
                                                {{ csrf_field() }} --}}
                                                <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete Deplacement" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                    </div>
                                    
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                    {{$deplacements->links()}}

                </div>
            </div>
        </div>
    </div>
</x-admin-layout>

