@extends('layouts.home')

@section('content')
<section class="post izq">
	<div class="espaciador" style="height:15px;"></div>
	<div class="nombre">
		<h1>TITULO</h1>
	</div>
	<div class="miniatura">
		<img src="{{URL::to('/')}}/img/linux-os.svg">
	</div>
</section>

<section class="post der">
	<div class="espaciador" style="height:15px;"></div>
	<div class="nombre">
		<h1>TITULO</h1>
	</div>
	<div class="miniatura">
		<img src="{{URL::to('/')}}/img/linux-os.svg">
	</div>
</section>

<section class="post"></section>

<section class="post"></section>
@stop