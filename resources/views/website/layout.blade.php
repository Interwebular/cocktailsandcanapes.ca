<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="msvalidate.01" content="5F513BE61DDE8E4D534175AD6B6397B7" />
        <title>@yield('page-title', 'Welcome') | Cocktails &amp; Canapes</title>
        <script src="https://use.typekit.net/ahl2ncy.js"></script>
        <script>try{Typekit.load({ async: true });}catch(e){}</script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.css"/>
        <link href="{{ elixir('css/cnc.css') }}" rel="stylesheet">

        <!-- icons -->
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">
        <!-- //icons -->

        <!-- SEO meta -->
        <meta name="application-name" content="Cocktails And Canapes">
        <meta name="description" content="@yield('meta-description', 'Whether you desire an elegant wedding reception, cocktail party, or a tailored thematic experience, Cocktails and Canapes has you covered.')">
        <meta name="keywords" content="@yield('meta-keywords', 'catering, vancouver caterer, vancouver catering company, cocktails, canapes, wedding canapes, wedding cocktails, wedding venues')">
        <meta property="og:site_name" content="Cocktails And Canapes"/>
        <meta property="og:title" content="@yield('page-title', 'Cocktails And Canapes')"/>
        <meta property="og:description" content="@yield('meta-description', 'Whether you desire an elegant wedding reception, cocktail party, or a tailored thematic experience, Cocktails and Canapes has you covered.')">
        <meta property="og:url" content="{{ URL::current() }}"/>
        <meta property="og:type" content="website"/>
        <meta property="og:image" content="{{ asset('img/social/cocktailsandcanapes_thumbnail.jpg') }}"/>
        <meta name="twitter:card" content="summary">
        <meta name="twitter:url" content="{{ URL::current() }}">
        <meta name="twitter:title" content="@yield('page-title', 'Cocktails And Canapes')">
        <meta name="twitter:description" content="@yield('meta-description', 'Whether you desire an elegant wedding reception, cocktail party, or a tailored thematic experience, Cocktails and Canapes has you covered.')">
        <meta name="twitter:image" content="{{ asset('img/social/cocktailsandcanapes_thumbnail.jpg') }}">
        <!-- //SEO meta -->

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

        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-77262662-1', 'auto');


        function sendEmailEvent() {

            @if(env('APP_ENV') === 'production')
                setTimeout(function(){
                    ga("send", "event", "Emails", "Contact");
                }, 200);
            @else
                console.log('GA', 'Email click tracked');
            @endif
        }
        </script>

        @if(env('APP_ENV') === 'production')
            <script>
                ga('send', 'pageview');
            </script>
        @endif
    </head>
    <body class="@yield('body-classes', '')">

        <div class="topbar">
            <div class="topbar__right">
                <span style="text-align: right;">
                    @include('partials.email', ['linkTextAsIcon' => true])
                    <a class="social" style="margin-left: 8px;" href="https://twitter.com/cocktail_canape" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a class="social" href="https://www.facebook.com/CocktailsCanapes" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a class="social" href="http://instagram.com/cocktailscanapes" target="_blank"><i class="fa fa-instagram"></i></a>
                    &middot;
                    @include('partials.email') &middot;
                    604.424.8788 &middot; @include('partials.email', ['linkTextAsEmail' => true])
                </span>
            </div>
            <div class="clearfix"></div>
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
                    <img class="nav-logo" src="{{ asset('img/logo_full.png') }}" alt="CNC"/>
                </a>
                <a href="#" class="open-mobile-nav"><i class="fa fa-bars"></i></a>

                <ul class="nav-items">
                    <li><a href="#" class="close-mobile-nav"><i class="fa fa-close"></i></a></li>
                    <li><a href="{{ url('/') }}"><img class="nav-logo" src="{{ asset('img/logo_full.png') }}" alt="Cocktails And Canapes"/></a></li>
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
                        @include('partials.email', ['linkTextAsEmail' => true])
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
                    @include('partials.email', ['linkTextAsIcon' => true])
                    <a href="https://twitter.com/cocktail_canape" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/CocktailsCanapes" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="http://instagram.com/cocktailscanapes" target="_blank"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </footer>

        <div class="dt-branding">
            <a href="http://droskiturner.com/" target="_blank" class="dt-logo">
                <img src="{{ asset('img/droskiturner_logo.png') }}" class="img-responsive" alt="Droskiturner"/>
            </a>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.5.9/slick.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.0.0/masonry.pkgd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.sticky/1.0.1/jquery.sticky.min.js"></script>
        <script src="{{ elixir('js/cnc.js') }}"></script>
        @yield('js')


        <!-- begin olark code -->
        <script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
        f[z]=function(){
        (a.s=a.s||[]).push(arguments)};var a=f[z]._={
        },q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
        f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
        0:+new Date};a.P=function(u){
        a.p[u]=new Date-a.p[0]};function s(){
        a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
        hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
        return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
        b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
        b.contentWindow[g].open()}catch(w){
        c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
        var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
        b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
        loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
        /* custom configuration goes here (www.olark.com/documentation) */
        olark.identify('9690-480-10-4759');/*]]>*/</script><noscript><a href="https://www.olark.com/site/9690-480-10-4759/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
        <!-- end olark code -->
    </body>
</html>
