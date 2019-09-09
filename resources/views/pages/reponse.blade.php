@extends('layouts.master') {{--extension de master --}}


{{--contenu de ma page reponse specifique à un utilisateur grace au clé unique--}}
<article class="container" id="container">

	{{--section contenant mon logo--}}
    
@section('content')

	   <div class="container" id="container">
					
					<header>
						<img id="logo" src="{{asset('images/bigscreen_logo.png')}}" alt="logo"/>
						<p>Vous Trouver ci-dessous les réponses que vous avez apporter à <br>
							notre sondage le:<strong>{{ $blabla->format('d M Y') }} à {{ $blabla->format('H:i:s') }}</strong><br>
						</p>
					</header>
			

			       {{--boucle foreach afin de recuperer toutes mes questions--}}
					@foreach($questions as $question)

							<div class="form-group">

							{{--recuperation des questions et reponses--}}
							<strong> Question {{$question->id}}/{{$questions->count()}}</strong><br>
							<label>{{$question->title}}</label>

							@forelse($responses as $key => $value)

							@if($question->id == $key)

								<div class="doshed">
									<p>{{$value}}</p>
								</div>

							@endif
							@empty

							<p>pas de reponse</p>

					@endforelse
		</div>

					@endforeach
</article>

@endsection
