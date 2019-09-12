@extends('layouts.master')

@section('content')
  
{{--le contenu de toutes mes questions--}}

	<article style="width:100%" class="container" id="container">
        
    {{--section reservé à l'image et au text de bienvenu--}}

          <section>
                  <img id="logo" src="{{asset('images/bigscreen_logo.png')}}" alt="logo"/>
                  <p>Merci de répondre à toutes les questions et de valider le formulaire en bas de page</p>
          </section>

          {{--section qui gére mon firmulaire--}}
          <section>
                  <form method="POST" action="{{route('pages.reponse')}}">
                        @csrf
                        @method('POST')
                      
                      <fieldset>
                        
                        {{--boucle afin de recuperer toutes mes questions --}}
                        @foreach($questions as $question)
                        
                        <section class="form-group">
                        
                              <strong>{{$question->number}}</strong><br>
                              <label>{{$question->title}}</label>
                                
                              {{--si le type de question est B est que le choix est email--}}
                              @if($question->is_email)
            
                              <input type="email" class="doshed form-control" id="email" value="{{old('reponse_type')}}" name="email[{{$question->id}}]" placeholder="{{$question->titre}}" value="{{old('reponse_type')}}"/>
                              
                             

                              {{--si la question est de type B--}}
                              @elseif($question->typeOfQuestion=="B")
                                <input type="text" class="form-control doshed" id="reponse" name="reponse_type{{$question->typeOfQuestion}}[{{$question->id}}]" aria-describedby="emailHelp" placeholder="{{$question->titre}}" required="required">

                              {{--si la question est de type A--}}
                              @elseif ($question->typeOfQuestion == "A")
                                
                                <select class="form-control doshed" name="reponse_type{{$question->typeOfQuestion}}[{{$question->id}}]" required="required">
                                  @forelse(json_decode($question->choice) as $reponse)
                                  <option value="{{ $reponse }}"> {{$reponse}} </option>
                                  @empty
                                  @endforelse
                                </select>

                               {{--si la question est de type c--}}
                              @elseif ($question->typeOfQuestion == "C") 
                              
                                <select class="form-control doshed" name="reponse_type{{$question->typeOfQuestion}}[{{$question->id}}]" required="required">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                </select>
                                @endif
                        </section>

                        @endforeach
                        <div class="form-group">
                            <button  type="submit" class="finaliser btn btn-primary">Finaliser</button>
                        </div>
                        
                      </fieldset>
                    
                      @csrf
                    </form>	
                   
          </section>

</article>

@endsection

{{--fin de ma section--}}
