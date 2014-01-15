@extends('layouts.registro')

@section('content')
<div>

	{{ Form::open(array('url'=>'registro/iniciar')) }}

    	{{Form::text('user')}}<br>
		{{Form::password('pass')}}<br>
		{{Form::submit('Iniciar')}}

		{{Form::token()}}
	{{ Form::close() }}
	
</div>
@stop 
