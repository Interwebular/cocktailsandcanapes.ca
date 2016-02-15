<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cocktails &amp; Canapes</title>
        <script src="https://use.typekit.net/ahl2ncy.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
        <link href="{{ elixir('css/cnc.css') }}" rel="stylesheet">

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    {{-- <body class="dark padding"> --}}
    <body class="@yield('body-classes', '')">

        <div class="contact-us">
            <p>
                604.424.8788<br>
                <a href="mailto:info@cocktailsandcanapes.ca">info@cocktailsandcanapes.ca</a>
            </p>
            <p>
                150 – 351 Abbott St.<br>
                P.O. Box 98882<br>
                Vancouver, BC V6B 0M4
            </p>
        </div>

        <div class="nav-background"></div>
        <nav class="desktop hidden-xs hidden-sm">
            <div class="nav-inner">
                <img class="nav-logo" src="{{ asset('img/logo_full.png') }}" alt="Cocktails And Canapes"/>
                <ul class="nav-items">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('page.show', 'menus') }}">Menus</a></li>
                    <li><a href="{{ route('page.show', 'the-team') }}">The Team</a></li>
                    <li><a href="{{ route('page.show', 'weddings') }}">Weddings</a></li>
                    <li><a href="{{ route('page.show', 'gallery') }}">Gallery</a></li>
                    <li><a href="" class="contact">Contact Us</a></li>
                </ul>
            </div>
        </nav>

        <nav class="mobile hidden-md hidden-lg">
            <div class="nav-inner">
                <img class="nav-logo" src="img/logo_icon.png" alt="Cocktails And Canapes"/>
                <a href="#" class="open-mobile-nav"><i class="fa fa-bars"></i></a>

                <ul class="nav-items">
                    <li><a href="#" class="close-mobile-nav"><i class="fa fa-close"></i></a></li>
                    <li><a href="{{ url('/') }}"><img class="nav-logo" src="img/logo_icon.png" alt="Cocktails And Canapes"/></a></li>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('page.show', 'menus') }}">Menus</a></li>
                    <li><a href="{{ route('page.show', 'the-team') }}">The Team</a></li>
                    <li><a href="{{ route('page.show', 'weddings') }}">Weddings</a></li>
                    <li><a href="{{ route('page.show', 'gallery') }}">Gallery</a></li>
                    <li><a href="{{ route('page.show', 'contact') }}">Contact Us</a></li>
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
                        150 – 351 Abbott St.<br>
                        P.O. Box 98882<br>
                        Vancouver, BC V6B 0M4
                    </p>
                </div>
                <div class="col-md-4" style="text-align: center;">
                    <div class="cta-wrapper" >
                        <a class="cta" href="#">Catering Menu</a>
                    </div>
                </div>
                <div class="col-md-4 social-icons">
                    <h4>Connect With Us</h4>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.0.0/masonry.pkgd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.sticky/1.0.1/jquery.sticky.min.js"></script>
        <script src="{{ elixir('js/cnc.js') }}"></script>
        @yield('js')
    </body>
</html>
