@extends('layouts.home')

@section('content')
<!-- NOTE: each "window" is a section element with class .window -->
<section id="0" class="window">
    <div class="content">
        <h1>
            <a href="{{URL::to('/')}}">
                <img src="{{URL::to('/')}}/img/tux-term.png" alt="Comunidad Linux UNI">
            </a>
        </h1>
    </div>
</section>
@stop

@section('assetjs')
<script>
$(document).ready(function(){
    var $windows = $('.window');
    $windows.windows({
        snapping: true,
        snapSpeed: 500,
        snapInterval: 1100,
        onScroll: function(s){},
        onSnapComplete: function($el){},
        onWindowEnter: function($el){}
    });
});
</script>
@stop