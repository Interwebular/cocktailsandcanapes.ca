@extends('website.layout')

@section('body-classes')
dark
@endsection

@section('meta-description') Vancouver Catering Services @endsection
@section('page-title') Vancouver Catering Company | Cocktails & Canapes @endsection

@section('content')

    <div class="bgimage" style="background-image:url({{ asset('img/services.jpg') }}); background-position: left center; display:block;"></div>

    <section class="section-panel section-fluid-height" style="padding: 270px 0;">
        <button class="section-button section-button-left client-left hidden-xs hidden-sm"><i class="fa fa-arrow-circle-o-left"></i></button>
        <button class="section-button section-button-right client-right hidden-xs hidden-sm"><i class="fa fa-arrow-circle-o-right"></i></button>
        <div class="content-center">
            <h1 class="wedding-title">
                CATERING SERVICES
            </h1>

            <div class="spacer" style="background: #fff;"></div>
            <div class="clients">
                <div class="client" style="color: #fff;">
                    <div class="quote quote__justified">
                       Need a Vancouver catering company that can do it all? 
                       We are Vancouver's best all-inclusive catering company. From weddings, birthday parties, 
                       to holiday staff parties; we are second to none! We also cater to live V.I.P 
                       and concert events, corporate launches, wrap parties, small or large scale soirees, 
                       galas and private or social events. We take care of staff, equipment rentals, event 
                       coordination and entertainment booking.
                    </div>
                </div>
            </div>
            <div class="wedding-button-group">
                <a href="{{ route('weddings.index') }}">Weddings</a>
                <a href="{{ route('contact.index') }}">Customize</a>
                <a href="{{ route('events') }}">Events</a>
            </div>
        </div>
    </section>

    <section class="section-panel section-white section-fluid-height padding">
        <button class="section-button section-button-left client-left hidden-xs hidden-sm"><i class="fa fa-arrow-circle-o-left"></i></button>
        <button class="section-button section-button-right client-right hidden-xs hidden-sm"><i class="fa fa-arrow-circle-o-right"></i></button>
        <div class="content-center">

            <div class="clients">
                <div class="client">
                    <div class="quote quote__justified">
                        “Cocktails and Canapes never disappoints. We have used them for appies & 
                        drinks for large corporate events as well as workplace luncheons. 
                        People always remark on the creative pairings and the high-quality food. Would recommend 100%!”
                    </div>
                    <blockquote>
                        Breanna Vander Helm
                    </blockquote>
                </div>

                <div class="client">
                    <div class="quote quote__justified">
                        “We hired Cocktails and Canapes to cater our wedding and they did a fantastic job - 
                        from canapes during the cocktail hour, to an amazing dinner and late night mac-n-cheese snack 
                        at midnight. They came up with creative menu options for our event and executed like professionals. 
                        Everything came in on time and on budget. Everybody was happy and there was no stress in dealing with 
                        them. Would recommend these guys if you are looking for a wedding caterer.”
                    </div>
                    <blockquote>
                        Laurent Munier
                    </blockquote>
                </div>

                <div class="client">
                    <div class="quote quote__justified">
                        “Love the team at Cocktails & Canapes! They've catered a large number of
                        our events over the past 2 years, often creating custom menus designed specifically 
                        for our guests and event theme. Whenever I need great food, a professional service 
                        team that I can depend on, and fun ideas, I look to them for help. Would definitely 
                        recommend them for your next event/party!”
                    </div>
                    <blockquote>
                        Melissa Mak
                    </blockquote>
                </div>
            </div>
            
        </div>
    </section>

    @if($dinners)
        <section class="section-panel panel-75  hidden-xs hidden-sm">
            <div class="menu-preview-content-container">
                <button class="left left-2 "><i class="fa fa-arrow-circle-o-left"></i></button>
                <button class="right right-2 "><i class="fa fa-arrow-circle-o-right"></i></button>
                <h1 class="menu-preview-title">
                    Dinner Menu
                </h1>
                <div class="menu-preview-content">
                    <div class="menu-content-preview-slider menu-content-preview-slider-2">
                        @foreach($dinners as $dinner)
                            <?php
                                $dinner->name = str_replace('(Plus $5)', '', $dinner->name);
                                $dinner->name = str_replace('(plus $5)', '', $dinner->name);
                                $dinner->name = str_replace('(PLUS $5)', '', $dinner->name);
                            ?>
                            <div>
                                <h1>{{ $dinner->name }}</h1>
                                <p>{{ $dinner->description }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
                <a class="menu-preview-link" href="/wedding-catering-menus/family-style">Full Menu</a>
            </div>
            <div class="menu-preview-image-container">

                <div class="menu-image-preview-slider menu-image-preview-slider-2">
                    @foreach($dinners as $dinner)
                        <div style="background-image:url({{ $dinner->image }})"></div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif


@endsection

@section('js')
    <script>

        $('a[href*=\\#]:not([href=\\#])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });

    </script>


@endsection
