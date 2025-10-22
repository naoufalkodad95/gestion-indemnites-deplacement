<!DOCTYPE html>
<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
  </head>
  <body>   
    <x-admin-layout>
      <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('FORMULAIRE DES INDEMNITES DE DEPLACEMENT') }}
            </h2>
      </x-slot>
      <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-12"> 
                   <div class="card">
                     <div class="card-header">{{ __('FORMULAIRE DES INDEMNITES DE DEPLACEMENT ') }}</div>
                        <div class="card-body">
                          <form action=" {{ url('deplacement') }}" method="post">
                            {!! csrf_field() !!}
                                          
                            <label for="exercice">Exercice :</label>
                            <input type="number" id="exercice" name="exercice" required>
                        
                            <label for="residence">Residence :</label>
                            <input type="text" id="residence" name="residence" required><br><br>

                            <label for="periode_debut">Depuis la période :</label>
                            <input type="date" id="periode_debut" name="periode_debut" required>
                                            
                            <label for="periode_fin">jusqu'à la période :</label>
                            <input type="date" id="periode_fin" name="periode_fin" required><br><br>
                                                  
                            <label for="nom">Nom :</label>
                            <input type="text" id="nom" name="nom" required>

                            <label for="prenom">Prenom :</label>
                            <input type="text" id="prenom" name="prenom" required>   <br><br>  

                            <label for="grade">Grade :</label>
                            <input type="text" id="grade" name="grade" required> 

                            <label for="n_ordre">N°ordre :</label>
                            <input type="number" id="n_ordre" name="n_ordre" required>

                            <label for="matricule">Matricule :</label>
                            <input type="number" id="matricule" name="matricule" required>     <br>  <br> 

                            <label for="service">Service :</label>
                            <select id="service" name="service" required>
                              <option value="">Sélectionner le service</option>
                              <option value="SPP">Service de la Planification et de la Programmation (S.P.P)</option>
                              <option value="SAF">Service Administratif et Financier (S.A.F)</option>
                              <option value="SM">Service du Matériel (S.M)</option>
                              <option value="SE">Service de l'Elevage (S.E)</option>
                              <option value="SER">Service de l'Equipement Rural (S.E.R)</option>
                              <option value="SVO">Service de la Vulgarisation et de l'Organisation Professionnelle (S.V.O)</option>
                              <option value="SGRID">Service de la Gestion des Réseaux d'Irrigation et de Drainage (S.G.R.I.D)</option>
                              <option value="SPA">Service de la Production Agricole (S.P.A)</option>
                            </select><br><br>
                            <h3>Indemnités de déplacement :</h3>
                            <table  class="table table-bordered" id="table">
                                <tr>
                                  <th>Date de la mission</th>
                                  <th>Destination</th>
                                  <th>Heur Départ</th>
                                  <th>Heur Retour</th>
                                  <th>les repas</th>
                                  <th>Montant</th>
                                  <th> <button type="button" name="add" id="add" class="btn btn-outline-success"  onclick="ajouterMission()">Ajouter</button></th>
                                  </th>
                                </tr>
                                <tr>
                                  <td><input type="date" name="inputs[0][date_mission]" min="1" max="5"  id="date_mission" class="form-control" required></td>
                                  <td><input type="text" name="inputs[0][destination]" class="form-control"  required></td>
                                  <td><input type="time" name="inputs[0][heure_depart]" class="form-control"  value="08:00" required   ></td>
                                  <td><input type="time" name="inputs[0][heure_retour]" class="form-control"  value="22:00" required></td>
                                  <td><input type="number" name="inputs[0][repas]" class="form-control"  id="repas" min="1"  max='3'required></td>
                                  <td><input type="number" name="inputs[0][montant]" class="form-control"  id="montant" min="40" max="300" required></td>
                                  <td><button type="button" class="btn btn-outline-danger remove-table-row">Supprimer</button></td>
                                  <div id="totalMontant"></div>
                                  <div id="totalRepas"></div>
                                </tr>                                                  
                            </table><br>
                            <button type="submit" class="btn btn-outline-primary col-md-2">Soumettre</button>
                          </form>                        
                        </div>
                      </div>                                   
                      </div>                      
                  </div>                                   
                </div>                                   
              </div>                                   
            </div>                                   
          </div>                                   
        </div>  
      </div>  
      <script>
        // **********Ajouter les td de mission **********
                  var i = 0 ;
                  $('#add').click(function(){
                    ++i;
                    $('#table').append(
                      `<tr>
                          <td><input type="date" name="inputs[`+i+`][date_mission]" class="form-control" id="date_mission" required></td>
                          <td><input type="text" name="inputs[`+i+`][destination]" class="form-control"  required></td>
                          <td><input type="time" name="inputs[`+i+`][heure_depart]" class="form-control"  value="08:00" required></td>
                          <td><input type="time" name="inputs[`+i+`][heure_retour]" class="form-control"  value="22:00"   required></td>
                          <td><input type="number" name="inputs[`+i+`][repas]" class="form-control"  id="repas" min="1"  max='3'required></td>
                          <td><input type="number" name="inputs[`+i+`][montant]" class="form-control"  id="montant" min="40" max="300" required></td>
                          <td><button type="button" class="btn btn-outline-danger remove-table-row">Supprimer</button></td>
                          </tr>`
                    );
                  });
        // *****Ajouter function de button  supprimer*******************
                  $(document).on('click','.remove-table-row',function(){
                    $(this).parents('tr').remove();
                  })
        // **********Ajouter une function pour  Calculer la somme de montant et repas***********
                  function updateTotals() {
                      var totalMontant = 0;
                      var totalRepas = 0;
        
                      $("#table tbody tr").each(function () {
                          var montant = parseFloat($(this).find("input[name$='[montant]']").val());
                          if (!isNaN(montant)) {
                              totalMontant += montant;
                          }
        
                          var repas = parseFloat($(this).find("input[name$='[repas]']").val());
                          if (!isNaN(repas)) {
                              totalRepas += repas;
                          }
                      });
                      $("#totalMontant").text("Total Montant: " + totalMontant.toFixed(2) + " DH");
                      $("#totalRepas").text("Total Repas: " + totalRepas.toFixed(2) + " DH");
                  }
        // *********** ajouter une function pour supprimer la ligne et mettre à jour les valeurs ***********
                        $("#table").on("click", ".remove-table-row", function() {
                          $(this).closest("tr").remove();
                          updateTotals();
                        });
        //*********** appel la fonction à chaque changement d'un des inputs ***********
                  $("table").on("input", "input[name$='[montant]'], input[name$='[repas]']", function () {
                      updateTotals();
                  });
        //***********  appel la fonction pour la première fois pour initialiser les totaux  ***********
                  updateTotals();
        // ****** desactiver wek-end      ***********
                  $(document).ready(function() {
                      $('input[type="date"]').on('change', function() {
                        var selectedDate = new Date($(this).val());
                        if (selectedDate.getDay() === 0 || selectedDate.getDay() === 6) {
                          alert("Sélectionner une date qui n'est pas un week-end.");
                          $(this).val("");
                        }
                      });
                    });
      </script>  
    </x-admin-layout>                        
  <body>
</html>                        