@extends('layouts.app')

@section('content')

<article class="container-fluid">
    <section class="row">
            <section style="height:963px" class="col-2 collapse d-md-flex bg-light pt-2 min-vh-100 menu" id="sidebar">
                 <nav class="menu-big" style="margin:0 auto">
                        <section>
                            <img style="width:200px;height:40px;margin:0 auto;" id="logo" src="{{asset('images/bigscreen_logo.png')}}" alt="logo"/>
                        </section>
                        
                        <section>
                                <ul class="nav flex-column flex-nowrap" style="width:80%;margin:0 auto;margin-top:23px;">
                                    <li style="background-color:dimgray;height:20px" class="nav-item"><a style="text-align:center;margin-top:-8px;color:white;" class="nav-link" href="{{route('admin')}}">Accueil</a></li><br>
                                    <li style="background-color:dimgray;height:20px" class="nav-item"><a style="text-align:center;margin-top:-8px;color:white;" class="nav-link" href="{{route('admin.questionnaire')}}">Questionnaire</a></li><br>
                                    <li style="background-color:dimgray;height:20px" class="nav-item"><a  style="text-align:center;margin-top:-8px;color:white;" class="nav-link" href="{{route('admin.reponse')}}">Réponses</a></li><br>
                                    <li style="background-color:dimgray;height:20px" class="nav-item dropdown">
                                    
                                    <a style="text-align:center;margin-top:-8px;color:white;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
 
                                    </div>
                                    </li>
                                </ul>
                        </section>
                </nav>

                
           </section>

            <section class="col pt-2">
               
                <section class="container">
                   
                        <div class="row" style="justify-content:space-between">
                            {{--affichage de mon pie chart 6 ---}}
                           
                           
                            <section style="border:1px solid gray">
                                    
                                    <div style="height:400px;width:400px">
                                        <canvas id="myChart1"></canvas>
                                     </div>
                                     <script>
                                         //pie Chart pour la question 6
                                            var ctx = document.getElementById("myChart1").getContext('2d');;
                                            var myChart = new Chart(ctx, {
                                            type: 'pie',
                                            data: {
                                                labels:['Occulus Rift/s','HTC Vive','Windows Mixed Reality',' PSVR'],
                                                datasets: [{
                                                backgroundColor: [
                                                    "#2ecc71",
                                                    "#3498db",
                                                    "#95a5a6",
                                                    "#9b59b6",
                                                ],
                                                data: ["{{$pie6[0]}}", "{{$pie6[1]}}", "{{$pie6[2]}}", "{{$pie6[3]}}"]
                                                }]
                                            }
                                            });
                                         </script>

                            </section>

                              {{--affichage de mon pie chart 7 ---}}
                            <section style="border:1px solid gray">
                                   
                                <div style="height:400px;width:400px">
                                     <canvas id="myChart2"></canvas>
                                </div>
                                
                                <script>
                                    var ctx = document.getElementById("myChart2");
                                    var myChart = new Chart(ctx, {
                                      type: 'pie',
                                      data: {
                                        labels: ['SteamVR','Occulus store',' Viveport',' Playstation VR',' Google Play','Windows store'],
                                        datasets: [{
                                          backgroundColor: [
                                            "#2ecc71",
                                            "#3498db",
                                            "#95a5a6",
                                            "#9b59b6",
                                            "#f1c40f",
                                            "#e74c3c",
                                           
                                          ],
                                          data: ["{{$pie7[0]}}", "{{$pie7[1]}}", "{{$pie7[2]}}", "{{$pie7[3]}}","{{$pie7[4]}}","{{$pie7[5]}}"]
                                        }]
                                      }
                                    });
                                </script>

                                
                            </section>
                            
                             {{--affichage de mon pie chart 10 ---}}
                            <section style="border:1px solid gray;margin-top:20px;">
                                     {{--  {!! $pie10->html() !!}  --}}

                                <div style="height:400px;width:400px">
                                     <canvas id="myChart3"></canvas>
                                 </div>
                                
                                 <script>
                                             //pie Chart pour la question 10
                                                var ctx = document.getElementById("myChart3").getContext('2d');;
                                                var myChart = new Chart(ctx, {
                                                type: 'pie',
                                                data: {
                                                    labels:['regarder des émissions TV en direct','regarder des films','jouer en solo', 'jouer en team'],
                                                    datasets: [{
                                                    backgroundColor: [
                                                        "#2ecc71",
                                                        "#3498db",
                                                        "#95a5a6",
                                                        "#9b59b6",
                                                    
                                                    ],
                                                    data: ["{{$pie10[0]}}", "{{$pie10[1]}}", "{{$pie10[2]}}", "{{$pie10[3]}}"]
                                                    }]
                                                }
                                                });
                                    </script>


                            </section>
                                                        
                            {{--affichage de du radarChart ---}}
                             <section style="border:1px solid gray;margin-top:20px;">
                                    
                                  <div style="height:400px;width:400px">
                                      {{--creation de mon canvas--}}
                                            <canvas id="myChart"></canvas>
                                    </div>

                                        <script>
                                               //creation des données qui seront donnée dans mon instance myRadarChart
                                            var data = {
                                                    labels: ["Qualité image", "Qualité Confort interface bigscreen", "Qualité connection reseau", "Qualité graphisme 3D","Qualité audio"],
                                                    datasets: [
                                                        {
                                                            
                                                            backgroundColor: "rgba(68,181,238,0.2)",
                                                            borderColor: "rgba(68,181,238,1)",
                                                            pointBackgroundColor: "rgba(179,181,198,1)",
                                                            pointBorderColor: "#fff",
                                                            pointHoverBackgroundColor: "#fff",
                                                            pointHoverBorderColor: "rgba(179,181,198,1)",
                                                            data: ["{{$question11}}", "{{$question12}}", "{{$question13}}", "{{$question14}}", 
                                                            "{{$question15}}"]
                                                        }
                                                    ]
                                                };
                                                //creation  de mon contexte
                                                var ctx = document.getElementById("myChart");
                                                
                                                //creation d'une instance de Chart
                                                var myRadarChart = new Chart(ctx, {
                                                    type: 'radar',
                                                    data: data,
                                                    options: {
                                                      scale: {
                                                        ticks: {
                                                            beginAtZero: true,
                                                            max:5,
                                                            
                                                        }
                                                      }
                                                    }
                                                });

                                         </script>
                             </section>
                                
                               
                    </div>
                    

                {!! Charts::scripts() !!}
         
                </section>
                        </section>
                
        </section>
           
        
 </article>

@endsection
