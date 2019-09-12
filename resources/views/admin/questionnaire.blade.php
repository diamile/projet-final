@extends('layouts.app')

@section('content')

    <article class="container-fluid">
        <section class="row">
            <section style="height:1081px" class="col-2 collapse d-md-flex bg-light pt-2 min-vh-100 menu" id="sidebar">
                    <section class="menu-big" style="margin:0 auto">
                    
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
        </section>

        {{--affichage de toutes mes questions--}}

        </section>
            <div class="col pt-2">
                <h2 style="text-align:center;">
                    <a href="" data-target="#sidebar" data-toggle="collapse" class="d-md-none"><i class="fa fa-bars"></i></a>
                    Page Questionnaire
                </h2>
                <table class="table table-hover" style="border:1px solid black;margin-top:10px;">
                        <thead>
                          <tr>
                            <th scope="col">Numero</th>
                            <th scope="col">corps de la question</th>
                            <th scope="col">Type de question</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                            
                        {{--je fais une boucle de au niveau de mon tableau $question afin de recuperer toutes mes donnés--}}
                        @foreach($questions as $question)
                          <tr class="table-dark">

                              {{--recuperation des numeros de questions--}}
                            <th scope="row">Question {{$question->id}}/{{$questions->count()}}</th>

                            {{--recuperation de mes titres--}}
                            <td>{{$question->title}}</td>

                            {{--recuperation de types de questions--}}
                            <td>{{$question->typeOfQuestion}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table> 
            </div>
        </section>
    </article>

@endsection
