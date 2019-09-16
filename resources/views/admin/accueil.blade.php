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
               
                {{--affichage des mes differentes graphes pie chart et radar chart--}}

                <section class="container">
                   
                        <div class="row" style="justify-content:space-between">
                                        
                                <section>
                                         <div id="piechart"></div>
                                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                
                                                <script type="text/javascript">

                                                //chargement de chart
                                                google.charts.load('current', {'packages':['corechart']});
                                                google.charts.setOnLoadCallback(drawChart);
                                                        
                                                //creation du radart chart
                                                const pie6= {!! json_encode($pie6) !!};
                                                function drawChart() {
                                                const data = google.visualization.arrayToDataTable([
                                                ['Task', 'Hours per Day'],
                                                ['Occulus Rift/s', pie6[0]],
                                                ['HTC Vive', pie6[1]],
                                                ['Windows M Reality', pie6[2]],
                                                [' PSVR', pie6[3]],
                                                          
                                                ]);
                                                        
                                                //les options de pie chart
                                                 var options = {'title':'Question 6', 'width':550, 'height':400};
                                                        
                                                //Affichage de mon pie chart dans une div
                                                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                                                chart.draw(data, options);
                                                 }
                                         </script>
                                </section>    
                                
                                <section>
                                       <div id="piechart2"></div>
                                         <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                
                                                <script type="text/javascript">
                                                        
                                                //chargement de mon pie chart
                                                google.charts.load('current', {'packages':['corechart']});
                                                google.charts.setOnLoadCallback(drawChart);
                                                
                                                //creation de mon pie chart
                                                 const pie7= {!! json_encode($pie7) !!};
                                                 function drawChart() {
                                                var data = google.visualization.arrayToDataTable([
                                                 ['Task', 'Hours per Day'],
                                                 ['SteamVR', pie7[0]],
                                                ['Occulus store', pie7[1]],
                                                ['Viveport',pie7[2]],
                                                 ['Playstation VR', pie7[3]],
                                                 ['Google Play', pie7[4]],
                                                ['Windows store', pie7[5]],
                                                          
                                                ]);
                                                        
                                                 //les options l'or de la creation de pie chart
                                                var options = {'title':'Question 7', 'width':550, 'height':400};
                                                        
                                                //Affichage de mon pie Chart
                                                var chart = new google.visualization.PieChart(document.getElementById('piechart2'));
                                                chart.draw(data, options);
                                                }
                                         </script>
                                 </section>


                                 <section style="margin-top:50px">
                                                <div id="piechart3"></div>
                                                <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        
                                                <script type="text/javascript">
                                                                // Load google charts
                                                google.charts.load('current', {'packages':['corechart']});
                                                google.charts.setOnLoadCallback(drawChart);
        
                                                               //creation de mon pie chart
                                                 const pie10= {!! json_encode($pie10) !!};
                                                function drawChart() {
                                                 var data = google.visualization.arrayToDataTable([
                                                ['Task', 'Hours per Day'],
                                                ['regarder des émissions TV en direct', pie10[0]],
                                                 ['regarder des films', pie10[1]],
                                                 ['jouer en solo',pie10[2]],
                                                 ['jouer en team', pie10[3]],  
                                                 ]);
                                                                
                                                        //les options l'or de la creation de mon pie Chart
                                                 var options = {'title':'Question 10', 'width':550, 'height':400};
                                                                
                                                         //Affichage de mon pie chart
                                                var chart = new google.visualization.PieChart(document.getElementById('piechart3'));
                                                                  chart.draw(data, options);
                                                                }
                                                 </script>
                                </section>

                                                                  
                                <section>
                                                                 
                                     <div id="container" style="background-color:white;width:550px;height:400px;margin-top:50px"></div>
                                      <script>
                                   const questions={!! json_encode($questions) !!};

                                anychart.onDocumentReady(function () {
                               
                               //creation de mes données et de mes labels
                                var dataSet = anychart.data.set([
                                        ['qualité de l’image', questions[0]],
                                        ['le confort de l’interface', questions[1]],
                                        ['connection réseau', questions[2]],
                                        ['qualité des graphismes 3D', questions[3]],
                                        ['la qualité audio', questions[4]]
                                       
                                ]);

                               
                                var data1 = dataSet.mapAs({'x': 0, 'value': 1});

                                // creation de mon radar chart
                                var chart = anychart.radar();

                                //titre de mon radar chart
                                chart.title('Radar Chart pour les questions de 11 à 15')
                                        
                                        //modifier le statut de la légende
                                        .legend(false);

                               //dimansionnement de mon radar chart
                                chart.padding().bottom(0);
                                chart.width(800);
                                chart.height(420);
                                chart.padding().right(220);
                                chart.padding().top(0)

                                //initialisation de mon echelle
                                chart.yScale()
                                        .minimum(0)
                                        .maximum(5)
                                        .ticks({'interval': 0.25});

                                //stylisation de mes labels
                                chart.label()
                                        
                                        .anchor('center-bottom')
                                        .position('center-bottom')
                                        .fontWeight('normal')
                                        .fontSize(11)
                                        .fontFamily('tahoma')
                                        .fontColor('rgb(35,35,35)')
                                        .offsetY(15);

                                
                                chart.line(data1).name('July 2019').markers(false);

                                
                                chart.tooltip().format('Value: {%Value}{decimalsCount: 2}');

                                //le conteneur de mon radar chart
                                chart.container('container');
                                // initialisation de creation du graphe
                                chart.draw();
                                });
                                </script>

                                </div>
                          </section>
        
                                                                
                  </section>
                     </section>
                  
        </section>

        
          
              
 </article>

@endsection
