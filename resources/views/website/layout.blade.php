<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('page-title', 'Welcome') | Cocktails &amp; Canapes</title>
        <script src="https://use.typekit.net/ahl2ncy.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
        <link href="{{ elixir('css/cnc.css') }}" rel="stylesheet">

        <meta name="application-name" content="Cocktails And Canapes">
        <meta name="description" content="@yield('meta-description')">
        <meta name="keywords" content="@yield('meta-keywords')">
        <meta property="og:site_name" content="Cocktails And Canapes"/>
        <meta property="og:title" content="@yield('page-title', 'Cocktails And Canapes')"/>
        <meta property="og:description" content="@yield('meta-description')">
        <meta property="og:url" content="{{ URL::current() }}"/>
        <meta property="og:type" content="website"/>

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <script>
          	document.createElement('video');
          </script>
          <style>
          video { display: block; }
          </style>
        <![endif]-->
    </head>
    {{-- <body class="dark padding"> --}}
    <body class="@yield('body-classes', '')">

        {{-- <div class="contact-us hidden-xs hidden-sm">
            <p>
                604.424.8788<br>
                <a href="mailto:info@cocktailsandcanapes.ca">info@cocktailsandcanapes.ca</a>
            </p>
            <p>
                150 – 351 Abbott St.<br>
                P.O. Box 98882<br>
                Vancouver, BC V6B 0M4
            </p>
        </div> --}}

        <div class="topbar">
            <span>
                604.424.8788 &middot; <a href="mailto:info@cocktailsandcanapes.ca">info@cocktailsandcanapes.ca</a>
                <a class="social" style="margin-left: 30px;" href="mailto:info@cocktailsandcanapes.ca" target="_blank"><i class="fa fa-envelope"></i></a>
                <a class="social" href="https://twitter.com/cocktail_canape" target="_blank"><i class="fa fa-twitter"></i></a>
                <a class="social" href="https://www.facebook.com/CocktailsCanapes" target="_blank"><i class="fa fa-facebook"></i></a>
                <a class="social" href="http://instagram.com/cocktailscanapes" target="_blank"><i class="fa fa-instagram"></i></a>
            </span>
            <a class="topbar--cta" href="{{ route('contact.index') }}">Request A Quote</a>
        </div>

        <div class="nav-background"></div>
        <nav class="desktop hidden-xs hidden-sm">
            <div class="nav-inner">
                <a href="{{ url('/') }}">
                    <img class="nav-logo" src="{{ asset('img/logo_full.png') }}" alt="Cocktails And Canapes"/>
                </a>
                <ul class="nav-items">
                    @include('layouts.partials.navitems')
                </ul>
            </div>
        </nav>

        <nav class="mobile hidden-md hidden-lg">
            <div class="nav-inner">
                <a href="{{ url('/') }}">
                    <img class="nav-logo" src="{{ asset('img/logo_icon.png') }}" alt="CNC"/>
                </a>
                <a href="#" class="open-mobile-nav"><i class="fa fa-bars"></i></a>

                <ul class="nav-items">
                    <li><a href="#" class="close-mobile-nav"><i class="fa fa-close"></i></a></li>
                    <li><a href="{{ url('/') }}"><img class="nav-logo" src="img/logo_icon.png" alt="Cocktails And Canapes"/></a></li>
                    @include('layouts.partials.navitems')
                </ul>
            </div>
        </nav>

        @yield('content')


        <footer>
            <div class="container">
                <div class="col-md-4">
                    <h4>Contact Us</h4>
                    <p>
                        604.424.8788<br>
                        <a href="mailto:info@cocktailsandcanapes.ca">info@cocktailsandcanapes.ca</a>
                    </p>
                    <p>
                        <strong>Mailing Address:</strong><br>
                        150 – 351 Abbott St.<br>
                        P.O. Box 98882<br>
                        Vancouver, BC V6B 0M4
                    </p>
                    <p>
                        <strong>Commissary Address:</strong><br>
                        686 Powell St.<br>
                        Vancouver, BC V6A 3G1<br>
                    </p>
                </div>
                <div class="col-md-4" style="text-align: center;">
                    <div class="cta-wrapper" >
                        <a class="cta" href="{{ route('menus.show') }}">Catering Menu</a>
                    </div>
                </div>
                <div class="col-md-4 social-icons">
                    <h4>Connect With Us</h4>
                    <a href="mailto:info@cocktailsandcanapes.ca" target="_blank"><i class="fa fa-envelope"></i></a>
                    <a href="https://twitter.com/cocktail_canape" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/CocktailsCanapes" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="http://instagram.com/cocktailscanapes" target="_blank"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </footer>

        <div class="dt-branding">
            <a href="http://droskiturner.com/" target="_blank" class="dt-logo">
                <img src="{{ asset('img/droskiturner_logo.png') }}" class="img-responsive" />
            </a>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.0.0/masonry.pkgd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.sticky/1.0.1/jquery.sticky.min.js"></script>
        <script src="{{ elixir('js/cnc.js') }}"></script>
        @yield('js')
    </body>
</html>
