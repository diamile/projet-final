@extends('layouts.master')

<div class="container" id="container">
    
    <img id="logo" src="{{asset('images/bigscreen_logo.png')}}" alt="logo"/>
    
@section('content')


<div class="container" id="container">

	<h3>Vous Trouver ci-dessous les réponses que vous avez apporter à <br>
		notre sondage le:{{ $blabla->format('d M Y') }} à {{ $blabla->format('H:i:s') }}<br>

		{{$timestamp}}
	</h3>
	
@foreach($questions as $question)

<div class="form-group">

<strong> Question {{$question->id}}/{{$questions->count()}}</strong><br>
<label>{{$question->title}}</label>

@forelse($responses as $key => $value)

@if($question->id == $key)

<div class="doshed">
	<p>{{$value}}</p>
</div>

@endif
@empty

<p>Aucune reponse</p>

@endforelse
</div>

@endforeach
</div>

@endsection
