<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <meta name="description" content="Sitio web de la Comunidad Linux UNI.">
        <title>CLINUX:{{$title}}</title>
        
        <!-- Favicon -->
        <link rel="icon" type="image/png" href="{{URL::to('')}}/img/favicon.png"/>
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        
        <!-- Foundation -->
        {{ HTML::style('css/normalize.css') }}
        <!-- If you are using CSS version, add this -->
        {{ HTML::style('css/foundation.css') }}
        {{ HTML::style('css/app.css') }}
        {{ HTML::style('css/general_enclosed_foundicons.css') }}
        {{ HTML::script('js/vendor/custom.modernizr.js') }}
        
        <!-- Windowjs -->
        {{ HTML::style('css/window.css') }}
        
        @yield('assetcss')
    </head>
    <body>

        <!-- body content here -->
        @yield('content')
        <!-- End Content -->

        <script>
            document.write('<script src=' +
            ('__proto__' in {} ? '<?=Request::root()?>/js/vendor/zepto' : '<?=Request::root()?>/js/vendor/jquery') +
            '.js><\/script>')
        </script>
        
        <!-- Foundation -->
        {{ HTML::script('js/foundation/foundation.js') }}
        {{ HTML::script('js/foundation/foundation.alerts.js') }}
        {{ HTML::script('js/foundation/foundation.clearing.js') }}
        {{ HTML::script('js/foundation/foundation.cookie.js') }}
        {{ HTML::script('js/foundation/foundation.dropdown.js') }}
        {{ HTML::script('js/foundation/foundation.forms.js') }}
        {{ HTML::script('js/foundation/foundation.joyride.js') }}
        {{ HTML::script('js/foundation/foundation.magellan.js') }}
        {{ HTML::script('js/foundation/foundation.orbit.js') }}
        {{ HTML::script('js/foundation/foundation.placeholder.js') }}
        {{ HTML::script('js/foundation/foundation.reveal.js') }}
        {{ HTML::script('js/foundation/foundation.section.js') }}
        {{ HTML::script('js/foundation/foundation.tooltips.js') }}
        {{ HTML::script('js/foundation/foundation.topbar.js') }}
        <script>
            $(document).foundation();
        </script>
        
        <!-- JQuery -->
        {{ HTML::script('js/jquery.js') }}
        
        <!-- Windowjs -->
        {{ HTML::script('js/window.js') }}
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
        
        @yield('assetjs')
        <!-- End Footer -->
    </body>
</html>