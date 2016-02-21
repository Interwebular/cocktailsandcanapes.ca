@extends('website.layout')

@section('content')

    <video autoplay loop muted poster="{{ asset('videos/intro.png') }}" id="bgvid" style="background-image:url({{ asset('videos/intro.png') }})">
        <source src="{{ asset('videos/intro.webm') }}" type="video/webm">
        <source src="{{ asset('videos/intro.mp4') }}" type="video/mp4">
    </video>

    <div class="bgimage" style="background-image:url({{ asset('videos/intro.png') }})"></div>

    <section class="section-panel panel-fullscreen panel-fixed">
        <div class="panel-content middle">
            <h1>Not Just Canapes.</h1>
            <div class="cta-wrapper">
                <a class="cta" href="#">Catering Menu</a>
            </div>
        </div>
    </section>

    <section class="section-panel section-white section-fluid-height padding">
        <div class="content-center">
            <img src="{{asset('img/logo_icon_dark.png')}}" class="logo-icon" />
            <div class="spacer"></div>
            <p class="default">
                Essentially, we’re a one-stop shop for all of your catering and event needs. We specialize in conceptualizing and producing large-scale cocktail soirees where guests can mingle and socialize throughout a custom-designed room while indulging on a perfectly-executed, customized menu.  Whether you desire an elegant cocktail party or an event with a specific thematic experience, our event architects cover every last detail to create your desired ambience including choice of venue, decor, entertainment, as well as food and beverage.  From unique interpretations of classic dishes and skilfully prepared craft  cocktails to memorable venues. Cocktails & Canapés creates a distinctive social experience that leaves guests buzzing.
            </p>

            <div class="cta-wrapper">
                <a class="cta black" href="#">Contact Us</a>
            </div>
        </div>
    </section>

    <section class="section-panel panel-75 hidden-xs hidden-sm">
        <div class="menu-preview-image-container">

            <div class="menu-preview-title">
                <h5>Example Menu</h5>
                <h1>Canapes</h1>
                <div class="cta-wrapper">
                    <a class="cta" href="#">Catering Menu</a>
                </div>
            </div>

            <div class="menu-image-preview-slider menu-image-preview-slider-1">
                <div style="background-image:url(http://placehold.it/1000/333333/444444?text=Image+Placeholder+1)"></div>
                <div style="background-image:url(http://placehold.it/1000/333333/444444?text=Image+Placeholder+2)"></div>
            </div>
        </div>
        <div class="menu-preview-content-container">
            <button class="left left-1"><i class="fa fa-arrow-circle-o-left"></i></button>
            <button class="right right-1"><i class="fa fa-arrow-circle-o-right"></i></button>

            <div class="menu-preview-content">
                <div class="menu-content-preview-slider menu-content-preview-slider-1">
                    <div>
                        <h1>Scotch Eggs</h1>
                        <p>
                            Quail Egg, Organic Wild Boar Sausage, Tamarind Ketchup, Red Micro Shoots
                        </p>
                    </div>
                    <div>
                        <h1>BBQ Duck Blini</h1>
                        <p>
                            Scallion Blini, BBQ Duck, Hong Kong Style Hoi Sin, Gooseberry Slaw
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-panel panel-75  hidden-xs hidden-sm">
        <div class="menu-preview-content-container">
            <button class="left left-2 "><i class="fa fa-arrow-circle-o-left"></i></button>
            <button class="right right-2 "><i class="fa fa-arrow-circle-o-right"></i></button>

            <div class="menu-preview-content">
                <div class="menu-content-preview-slider menu-content-preview-slider-2">
                    <div>
                        <h1>Beef Short Ribs</h1>
                        <p>
                            Braised Beef Short Rib, Smoked Cheddar Mash Potato, Red Wine Demi Glace, Rosemary Rock Salt Focaccia
                        </p>
                    </div>
                    <div>
                        <h1>Line Caught Lingcod</h1>
                        <p>
                            Pan Seared Oceanwise Lingcod, Cippolini Onions, Baby Red Potatoes, Baby Organic Carrots, Roasted Red Pepper Beurre Blanc
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-preview-image-container">
            <div class="menu-preview-title">
                <h5>Example Menu</h5>
                <h1>Dinner</h1>
                <div class="cta-wrapper">
                    <a class="cta" href="#">Catering Menu</a>
                </div>
            </div>

            <div class="menu-image-preview-slider menu-image-preview-slider-2">
                <div style="background-image:url(http://placehold.it/1000/333333/444444?text=Image+Placeholder+1)"></div>
                <div style="background-image:url(http://placehold.it/1000/333333/444444?text=Image+Placeholder+2)"></div>
            </div>
        </div>
    </section>


    <section class="section-panel section-fluid-height section-white">
        <button class="section-button section-button-left client-left hidden-xs hidden-sm"><i class="fa fa-arrow-circle-o-left"></i></button>
        <button class="section-button section-button-right client-right hidden-xs hidden-sm"><i class="fa fa-arrow-circle-o-right"></i></button>
        <div class="content-center">
            <h1>Our Clients Are Our Biggest Fans</h1>
            <div class="spacer"></div>
            <div class="clients">
                <div class="client">
                    <div class="quote">
                        <span><i class="fa fa-quote-left"></i></span>
                        <strong>Cocktails &amp; Canapes</strong> did a fantastic job running the beverage program for the <strong>Olympic</strong> and <strong>Paralympic</strong> Games management Wrap Party inside the Olympic Village site. Over 1000 guests, tight deadlines, complex logistics and they made it happen effortlessly. Kudos to the team!
                        <span><i class="fa fa-quote-right"></i></span>
                    </div>
                    <blockquote>
                        Jordan Kallman, Village Plaza &amp; Events:<br>
                        Vancouver Organizing Commitee for the 2010 Olympic & Paralympic Games
                    </blockquote>
                </div>
                <div class="client">
                    Cocktails &amp; Canapes did a fantastic job running the beverage program for the Olympic and Paralympic Games management Wrap Party inside the Olympic Village site. Over 1000 guests, tight deadlines, complex logistics and they made it happen effortlessly. Kudos to the team!
                </div>
            </div>
        </div>
    </section>
@endsection
