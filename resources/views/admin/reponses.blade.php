@extends('layouts.app')

{{--affichade de toutes les reponses de toutes les utilisateurs--}}
@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-2 collapse d-md-flex bg-light pt-2 min-vh-100 menu" id="sidebar" style="position:fixed;height:963px;max-width:250px;">
                    <div class="menu-big" style="margin:0 auto;max-width:250px;">
                    
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

            <div style="margin-left:300px;width:90%">
                <h2>
                    <a href="" data-target="#sidebar" style="max-width:250px;" data-toggle="collapse" class="d-md-none"><i class="fa fa-bars"></i></a>
                    reponses
                </h2>
               
                {{--boucle sur mon tableau reponses afin de recuperer toutes mes reponses--}}
                @foreach($reponses as $reponse=>$vals)
                <table class="table table-responsive-md" style="border:1px solid black;margin-top:10px;">
                       
                        <thead>
                          <tr>
                            <th scope="col">Numero</th>
                            <th scope="col">corps de la question</th>
                            <th scope="col">réponses</th>
                            
                          </tr>
                        </thead>
                       @foreach($vals as $val)
                       
                        <tbody>
                      
                          <tr class="table-dark">
                              {{--recuperation des numeros de question--}}

                            <th scope="row">Question {{$val->question->id}}</th>

                            {{--recuperation de toutes mes titres--}}
                            <td>{{$val->question->title}}</td>
                            
                            {{--recuperation de toutes mes reponses--}}
                            <td>{{$val->answer}}</td>
                            
                          </tr>
                         
                        </tbody>
                        @endforeach
                       
                      </table> 
                      @endforeach
                     
            </div>
        </div>
    </div>

@endsection
