@extends('layouts.home')

@section('content')
<section class="post izq">
	<div>
		<div class="espaciador" style="height:15px;"></div>
		<div class="nombre">
			<h1>LINUX</h1>
		</div>
		<div class="miniatura">
			<img src="{{URL::to('/')}}/img/tux.svg">
		</div>
		<div class="extracto">
			<p>GNU / Linux est una ex coniunctione termini praedicatur de coro dicti nucleus Linux cum 
			GNU sive liber Unix similis ratio. Eorum development est unus of plurrimi prominent exempla ...</p>
		</div>
		<div class="espaciador" style="height:50px;"></div>
	</div>
</section>

<section class="post der">
	<div class="espaciador" style="height:15px;"></div>
	<div class="nombre">
		<h1>CLINUX</h1>
	</div>
	<div class="miniatura">
		<img src="{{URL::to('/')}}/img/clinux.svg">
	</div>
	<div class="extracto">
		<p>Univer Linux CLINUX verbum ludum communitas est communitas Liberarum Programmationis 
		National University of Engineering cum Hispanis Acronym Univer attendens ad promovere usum ...</p>
	</div>
	<div class="espaciador" style="height:50px;"></div>
</section>

<section class="post izq">
	<div class="espaciador" style="height:15px;"></div>
	<div class="nombre">
		<h1>TITULO</h1>
	</div>
	<div class="miniatura">
	</div>
	<div class="extracto">
		<p>Pensa bene vales putatur translationis text ornamenta deverias quod neque intenderent.</p>
	</div>
	<div class="espaciador" style="height:50px;"></div>
</section>

<section class="post der">
	<div class="espaciador" style="height:15px;"></div>
	<div class="nombre">
		<h1>TITULO</h1>
	</div>
	<div class="miniatura">
	</div>
	<div class="extracto">
		<p>Pensa bene vales putatur translationis text ornamenta deverias quod neque intenderent.</p>
	</div>
	<div class="espaciador" style="height:50px;"></div>
</section>
@stop