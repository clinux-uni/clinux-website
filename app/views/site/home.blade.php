@extends('layouts.home')

@section('content')
<div class="contenedor_post">
<section class= "column twocol twothirdcol" style="position: absolute; left: 0px; top: 0px;">
	<div class="post izq">	
		<figure class="miniatura">
			<a title="linux" rel="bookmark" href="#">
				<img class="attachment-teaser-thumb wp-post-image" alt="linux" src="{{URL::to('/')}}/img/tux.svg"></img>
			</a>
		</figure>
		<div class="extracto">
			<header class="entry-header">
				<h2 class="entry-title">
					<a title="linux" rel="bookmark" href="#">
						Linux
					</a>
				</h2>
			</header>
			<div class="entry-summary">
				<p>GNU / Linux est una ex coniunctione termini praedicatur de coro dicti nucleus Linux cum 
				GNU sive liber Unix similis ratio. Eorum development est unus of plurrimi prominent exempla ...</p>
			</div>
			<div class="clear"></div>
		</div>
		<div class="espaciador" style="height:50px;"></div>
	</div>
</section>

<section class= "column twocol twothirdcol" style="position: absolute; left: 380px; top: 0px;">
	<div class="post izq">	
		<figure class="miniatura">
			<a title="linux" rel="bookmark" href="#">
				<img class="attachment-teaser-thumb wp-post-image" alt="linux" src="{{URL::to('/')}}/img/clinux.svg"></img>
			</a>
		</figure>
		<div class="extracto">
			<header class="entry-header">
				<h2 class="entry-title">
					<a title="linux" rel="bookmark" href="#">
						CLINUX
					</a>
				</h2>
			</header>
			<div class="entry-summary">
				<p>Univer Linux CLINUX verbum ludum communitas est communitas Liberarum Programmationis 
					National University of Engineering cum Hispanis Acronym Univer attendens ad promovere usum ...</p>
			</div>
			<div class="clear"></div>
		</div>
		<div class="espaciador" style="height:50px;"></div>
	</div>
</section>

<section class="post izq" style="position: absolute; left: 0px; top: 450px;">
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

<section class="post izq" style="position: absolute; left: 0px; top: 650px;">
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
</div>
@stop
