@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div style="height:963px" class="col-2 collapse d-md-flex bg-light pt-2 min-vh-100 menu" id="sidebar">
                    <div class="menu-big" style="margin:0 auto">
                    
                    <img style="width:200px;height:40px;margin:0 auto;" id="logo" src="{{asset('images/bigscreen_logo.png')}}" alt="logo"/>
                    
                     <div>
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
            </div>
            </div>

                
            </div>

            <div class="col pt-2">
               
                <div class="container">
                   
                        <div class="row" style="justify-content:space-between">
                            <div style="width:400px;height:400px">
                                    {!! $pie6->html() !!}
                             </div>

                            <div style="width:400px;height:400px">
                                    {!! $pie7->html() !!}
                            </div>
                                
                            <div style="width:400px;height:400px">
                                     {!! $pie10->html() !!}
                            </div>
                                                        
                                        
                             <div style="width:400;height:400">
                                            <canvas style="width:400px;height:400px" id="myChart"></canvas>
                                            <script>
                                               
                                                var data = {
                                                    labels: ["Qualité image", "Qualité Confort interface bigscreen", "Qualité connection reseau", "Qualité graphisme 3D","Qualité audio"],
                                                    datasets: [
                                                        {
                                                            label: "Quality of Life Domains",
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
                                                
                                                var ctx = document.getElementById("myChart");
                                                
                                                var myRadarChart = new Chart(ctx, {
                                                    type: 'radar',
                                                    data: data,
                                                    options: {
                                                      scale: {
                                                        ticks: {
                                                            beginAtZero: true
                                                        }
                                                      }
                                                    }
                                                });
  
            
                                            </script>
                            </div>
                                
                               
                    </div>

                {!! Charts::scripts() !!}
               
                
                {!! $pie6->script() !!}
                {!! $pie7->script() !!}
                {!! $pie10->script() !!}
                
              
                
            </div>
        </div>
    </div>

@endsection
