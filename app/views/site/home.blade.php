@extends('layouts.default')

@section('content') 
<!-- Shows -->
<div class="large-4 small-6 columns">
  	<h4>Upcoming Shows</h4>
  	<hr>
	<div class="row">
		<div class="large-1 column">
			<img src="http://placehold.it/50x50&amp;text=[img]">
		</div>
		<div class="large-9 columns">
			<h5><a href="#">Venue Name</a></h5>
			<h6 class="subheader show-for-small">Doors at 00:00pm</h6>
		</div>
	</div>
	<hr>
  	<div class="hide-for-small">
    	<div class="row">
      		<div class="large-1 column">
        		<img src="http://placehold.it/50x50&amp;text=[img]">
      		</div>
      		<div class="large-9 columns">
        		<h5 class="subheader"><a href="#">Venue Name</a></h5>
      		</div>
    	</div>
    	<hr>
    	<div class="row">
      		<div class="large-1 column">
        		<img src="http://placehold.it/50x50&amp;text=[img]">
      		</div>
      		<div class="large-9 columns">
        		<h5 class="subheader"><a href="#">Venue Name</a></h5>
      		</div>
    	</div>
    	<hr>
    	<div class="row">
      		<div class="large-1 column">
        		<img src="http://placehold.it/50x50&amp;text=[img]">
      		</div>
      		<div class="large-9 columns">
        		<h5 class="subheader"><a href="#">Venue Name</a></h5>
      		</div>
    	</div>
  	</div>
</div>
<!-- End Shows -->
 
 
<!-- Image -->
<div class="large-4 small-6 columns">
  	<img src="http://placehold.it/300x465&amp;text=Image">
</div>
<!-- End Image -->
 
 
<!-- Feed -->
<div class="large-4 small-12 columns">
  	<h4>Blog</h4>
  	<hr>
  	<div class="panel">
    	<h5><a href="#">Post Title 1</a></h5>
    	<h6 class="subheader">
      		Risus ligula, aliquam nec fermentum vitae, sollicitudin eget urna. Suspendisse ultrices ornare tempor...
    	</h6>
    	<h6><a href="#">Read More »</a></h6>
  	</div>
  	<div class="panel hide-for-small">
    	<h5><a href="#">Post Title 2 »</a></h5>
  	</div>
  	<div class="panel hide-for-small">
    	<h5><a href="#">Post Title 3 »</a></h5>
  	</div>
  	<a href="#" class="right">Go To Blog »</a>
</div>
<!-- End Feed -->
@stop