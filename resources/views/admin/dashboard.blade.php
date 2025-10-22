<x-admin-layout>
    
        
                    
                    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
                    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script> -->
                    <!-- Add Chart.js script -->
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                    <!-- Add Chart.js CSS -->
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js/dist/chart.min.css">
                    <style>
                        .main {
                        /* width:  100%;  */
                        height: 90.5%;
                           
                        position: absolute;
                        background: #c2df9a;
                    }
                        * {
                        padding: 0;
                        margin: 0;
                        box-sizing: border-box;
                        font-family: 'poppins', sans-serif;
                    }
                    .topbar {
                        position: fixed;
                        background-color: #fff;
                        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.08);
                        width: 100%;
                        padding: 0 20px;
                        height: 60px;
                        display: grid;
                        grid-template-columns: 2fr 10fr 0.4fr 1fr;
                        align-items: center;
                        z-index: 1;
                    }
                    .fa-bell {
                        justify-self: right;
                    }
                    .user {
                        position: relative;
                        width: 50px;
                        height: 50px;
                        justify-self: right;
                    }
                    .cards {
                        width: 100%;
                        padding: 35px 20px;
                        display: grid;
                        grid-template-columns: repeat(4, 1fr);
                        grid-gap: 20px;
                    }
                    /* h5,
                    .h5{
                        color: black;
                        font-size: 16.3px;
                        font-family: system-ui;
                    } */
                    .cards .card {
                        padding: 20px;
                        /* display: flex; */
                        align-items: center;
                        justify-content: space-between;
                        background-color: #91c549;
                        border-radius: 10px;
                        /* box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08); */
                    
                        display: inline-block;
                        vertical-align: middle;
                        transform: translateZ(0);
                        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
                        backface-visibility: hidden;
                        -moz-osx-font-smoothing: grayscale;
                        transition-duration: 0.3s;
                        transition-property: transform;
                    }
                    .cards .card:hover {
                    background-color: #95aa2c;
                    box-shadow: 0 7px 15px rgba(0, 0, 0, 0.1);
                    transform: scale(1.04);
                    }
                    /* .hvr-grow {
                        display: inline-block;
                        vertical-align: middle;
                        transform: translateZ(0);
                        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
                        backface-visibility: hidden;
                        -moz-osx-font-smoothing: grayscale;
                        transition-duration: 0.3s;
                        transition-property: transform;
                    }
                    
                    .hvr-grow:hover,
                    .hvr-grow:focus,
                    .hvr-grow:active {
                        transform: scale(1.1);
                    } */
                    
                    .number {
                        font-size: 35px;
                        font-weight: 500;
                        color: #FDFFC6;
                    }
                    
                    .card-name {
                        color: #427300;
                        font-weight: 600;
                    }
                    
                    /* charts */
                    
                    .chart-row {
                      display: flex;
                      justify-content: space-between;
                    
                    
                        grid-template-columns: 2fr 1fr;
                        grid-gap: 20px;
                        width: 100%;
                        padding: 20px;
                        padding-top: 0;
                    }
                    
                    .chart-container {
                      width: 30%;
                    
                      background-color: #e7f2d7;
                      /* margin-block-start: 0% */
                        padding: 20px;
                        border-radius: 10px;
                        box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
                    }
                    
                    .big {
                      width: 50%;
                    }
                    .barchart{
                        display: grid;
                        grid-template-columns: 2fr 1fr;
                        grid-gap: 20px;
                        width: 40%;
                        padding: 20px;
                        padding-top: 0;
                    
                        background-color: #fff;
                        border-radius: 10px;
                        box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
                        width: 40%;
                    }
                    .charts {
                        display: grid;
                        grid-template-columns: 2fr 1fr;
                        grid-gap: 20px;
                        width: 100%;
                        padding: 20px;
                        padding-top: 0;
                    
                        display: flex;
                      justify-content: space-between;
                    }
                    
                    .chart {
                        background-color: #fff;
                        padding: 20px;
                        border-radius: 10px;
                        box-shadow: 0 7px 25px rgba(0, 0, 0, 0.08);
                        width: 30%;
                    }
                    
                    .chart h2 {
                        margin-bottom: 5px;
                        font-size: 20px;
                        color: #666;
                        text-align: center
                    }
                    
                    /* table  */
                    
                    .table {
                        border-collapse: collapse;
                        margin: 25px 0;
                        font-size: 0.9em;
                        font-family: sans-serif;
                        min-width: 300px;
                        box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
                    }
                    
                    .table th, .table td {
                      padding: 12px 15px;
                      text-align:   center;
                      border-bottom: 1px solid #ddd;
                    }
                    
                    .table th {
                      background-color: #f5f5f5;
                    }
                    
                    .table tbody tr:nth-child(even) {
                        border-bottom: 1px solid #dddddd;
                    }
                    
                    .table tbody tr:hover {
                        border-bottom: 2px solid #4db7a1;
                    }
                    
                    
                    @media (max-width:1115px) {
                        .sidebar {
                            width: 60px;
                        }
                        .main {
                            width: calc(100% - 60px);
                            left: 60px;
                        }
                    }
                    
                    @media (max-width:880px) {
                        /* .topbar {
                            grid-template-columns: 1.6fr 6fr 0.4fr 1fr;
                        } */
                        .fa-bell {
                            justify-self: left;
                        }
                        .cards {
                            width: 100%;
                            padding: 35px 20px;
                            display: grid;
                            grid-template-columns: repeat(2, 1fr);
                            grid-gap: 20px;
                        }
                        .charts {
                            grid-template-columns: 1fr;
                        }
                        .doughnut-chart {
                            padding: 50px;
                        }
                        #doughnut {
                            padding: 50px;
                        }
                    }
                    
                    @media (max-width:500px) {
                        .topbar {
                            grid-template-columns: 1fr 5fr 0.4fr 1fr;
                        }
                        .logo {
                            font-size: 20px;
                        }
                        .fa-bell {
                            margin-right: 5px;
                        }
                        .cards {
                            grid-template-columns: 1fr;
                        }
                        .doughnut-chart {
                            padding: 10px;
                        }
                        #doughnut {
                            padding: 0px;
                        }
                    }
                    </style>
                        <div class="main">
                            <div class="cards">
                                <div class="card">
                                    <div class="card-content">
                                        <div class="number">{{ $nombreEmployes[0]->nombre }}</div>
                                        <div class="card-name">Nombre d'employés</div>
                                        
                                    </div>
                                    <div class="icon-box">
                                        <i class="fas fa-user-graduate"></i>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-content">
                                        <div class="number">{{ $totalDemandes }}</div>
                                        <div class="card-name">Nombre total de demandes de déplacement soumises</div>
                                    </div>
                                    <div class="icon-box">
                                        <i class="fas fa-chalkboard-teacher"></i>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-content">
                                        <div class="number">{{ $totalMissions }}</div>
                                        <div class="card-name">Nombre total de missions effectuées</div>
                                    </div>
                                    <div class="icon-box">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-content">
                                        <div class="number">{{ $montantTotalFrais }} MAD</div>
                                        <div class="card-name">Montant total des frais de déplacement engagés</div>
                                    </div>
                                </div>
                    
                            </div>
                    
                    <!-- charts -->
                    
                    <div class="chart-row">
                    
                      <div class="chart-container big">
                        <h6>Montant total des frais de déplacement engagés par mois au cours des 12 derniers mois</h6>
                        <canvas id="myChart888"></canvas>
                      </div>
                    
                      <div class="chart-container">
                        <div>
                          <canvas id="missions-pie-chart"></canvas>
                        </div>
                      </div>
                    
                      <div class="chart-container ">
                        <h6>Les employés ayant le plus de missions effectuées</h6>
                        <table class="table " >
                          <thead  >
                            <tr>
                              <th>Nom</th>
                              <th>Prénom</th>
                              <th>Total missions</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($employesPlusMission as $employe)
                            <tr>
                              <td>{{ $employe->nom }}</td>
                              <td>{{ $employe->prenom }}</td>
                              <td>{{ $employe->total_missions }}</td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                    </div>
                    </div>
                    
                    <canvas id="missions-pie-chart"></canvas>
                    <script>
                        var missionsData = {
                            labels: ["Missions complétées", "Demandes de déplacement soumises"],
                            datasets: [{
                                data: [{{$totalMissions}}, {{$totalDemandes}}],
                                backgroundColor: ['#36A2EB', '#FFCE56']
                            }]
                        };
                    
                        var missionsPieChart = new Chart(document.getElementById('missions-pie-chart'),{
                            type: 'pie',
                            data: missionsData
                        });
                    </script>
                    
                    
                    <!-- <div>
                    <canvas id="doughnut-chart"></canvas>
                    </div>
                    
                    <script>
                        var doughnutChart = new Chart(document.getElementById('doughnut-chart'), {
                            type: 'doughnut',
                            data: {
                                labels: ['Total Missions', 'Total Demandes'],
                                datasets: [{
                                    label: 'Total Missions and Total Demandes',
                                    data: [{{ $totalMissions }}, {{ $totalDemandes }}],
                                    backgroundColor: ['#007bff', '#FFCE56'],
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                title: {
                                    display: true,
                                    text: 'Total Missions and Total Demandes'
                                }
                            }
                        });
                    </script> -->
                    
                    <canvas id="myChart888"></canvas>
                    <script>
                        var ctx = document.getElementById('myChart888').getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: [
                                    @foreach ($months as $month)
                                        '{{ $month['month'] }}',
                                    @endforeach
                                ],
                                datasets: [{
                                    label: 'Montant total des frais de déplacement engagés',
                                    data: [
                                        @foreach ($months as $month)
                                            {{ $month['montant'] }},
                                        @endforeach
                                    ],
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)',
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)',
                                    ],
                                    borderColor: [
                                        'rgba(255, 99, 132, 1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)',
                                        'rgba(255, 99, 132, 1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)',
                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero: true
                                        }
                                    }]
                                }
                            }
                        });
                    
                    </script>
                    
                              </div>
            </div>
        </div>
    </div>

</x-admin-layout>
