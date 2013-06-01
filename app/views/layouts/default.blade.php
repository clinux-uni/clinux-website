<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <meta name="description" content="Sitio web de la Comunidad Linux UNI.">
        <title>CLINUX:{{$title}}</title>

        <link rel="icon" type="image/png" href="/img/favicon.png"/>
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        {{ HTML::style('css/normalize.css') }}
        <!-- If you are using CSS version, add this -->
        {{ HTML::style('css/foundation.css') }}
        {{ HTML::style('css/app.css') }}
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        {{ HTML::script('js/vendor/custom.modernizr.js') }}
    </head>
    <body>
        <header>
            <!-- Navigation -->
            <nav class="top-bar">
                <!-- Title Area --> 
                <ul class="title-area">
                    <li class="name">
                        <h1><a href="#">Top Bar Title</a></h1>
                    </li>
                    <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
                </ul>
                <section class="top-bar-section">
                    <!-- Right Nav Section -->
                    <ul class="right">
                        <li class="divider"></li>
                        <li><a href="#">Main Item 1</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Main Item 2</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Main Item 3</a></li>
                    </ul>
                </section>
            </nav>
            <!-- End Top Bar -->
        </header>

        <section>
            <!-- Content Slider -->
            <div class="large-12 hide-for-small">
                <div id="featured" data-orbit>
                    <img src="http://placehold.it/1200x500&text=Slide Image 1" alt="slide image">
                    <img src="http://placehold.it/1200x500&text=Slide Image 2" alt="slide image">
                    <img src="http://placehold.it/1200x500&text=Slide Image 3" alt="slide image">
                </div>
            </div>
            <!-- End Content Slider -->

            <!-- Mobile Header -->
            <div class="large-12 columns show-for-small">
                <img src="http://placehold.it/1200x700&text=Mobile Header">
            </div>
            <br>
            <!-- End Mobile Header -->
        </section>

                <div class="row">
                    <div class="large-12 columns">
                        <div class="row">
                            <!-- body content here -->
                            @yield('content')

                        </div>
                    </div>
                </div>
                <!-- End Content -->
 
                <!-- Footer -->
                <footer class="row">
                    <div class="large-12 columns"><hr>
                        <div class="row">
                            <div class="large-6 columns">
                                <p>&copy; Copyright no one at all. Go to town.</p>
                            </div>
                            <div class="large-6 small-12 columns">
                                <ul class="inline-list right">
                                    <li><a href="#">Link 1</a></li>
                                    <li><a href="#">Link 2</a></li>
                                    <li><a href="#">Link 3</a></li>
                                    <li><a href="#">Link 4</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->
 
        </div>
        
        <script>
            document.write('<script src=' +
            ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
            '.js><\/script>')
        </script>
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
        <!-- End Footer -->
    </body>
</html>