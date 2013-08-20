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
        
        <!-- Estilos -->
        {{ HTML::style('css/app.css') }}
        
        <!-- Windowjs -->
        {{ HTML::style('css/window.css') }}
        
        @yield('assetcss')
    </head>
    <body>

        <!-- body content here -->
        @yield('content')
        <!-- End Content -->

        <!-- JQuery -->
        {{ HTML::script('js/jquery.js') }}
        
        <!-- Windowjs -->
        {{ HTML::script('js/window.js') }}
        
        @yield('assetjs')
        <!-- End Footer -->
    </body>
</html>