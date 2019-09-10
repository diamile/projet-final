@if(count($errors)>0)

@foreach($errors->all() as $error)

<div class="alert alert-danger">
   {{$error}}
</div>

@endforeach

@endif


@if(Session::has('success'))

<div class="alert alert-success">
	{!! session()->get('success')  !!}
</div>

@endif


@if(session('error'))

<div class="alert alert-danger">
     {{session('error')}}
</div>

@endif


