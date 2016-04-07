@extends('website.layout')

@section('body-classes')
dark
@endsection

@section('page-title') Weddings @endsection
@section('meta-description') Description @endsection
@section('meta-keywords') Keywords @endsection

@section('content')

    <div class="bgimage" style="background-image:url({{ asset('img/wedding/wedding12.jpg') }}); background-position: left center; display:block;"></div>
    {{-- <div class="bgimage" style="background-image:url(https://images.unsplash.com/photo-1439539698758-ba2680ecadb9?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=16ae0d59f1cdf1463b47a610c4c9b8d3); background-position: left center; display:block;"></div> --}}


    {{-- <section class="section-panel panel-fullscreen panel-fixed">
        <div class="container-fluid">
            <div class="col-md-6 col-md-offset-3" style="margin-top:220px">
                <h1 class="wedding-title">Weddings<br><small>A few accolades from happy couples:</small></h1>
                <div class="clients">
                    @foreach(App\Services\Testimonials\Retrieve::random('wedding') as $testimonial)
                        <div class="client client--white client--lg client--left wedding-page">
                            <div class="quote">
                                {!! $testimonial->content !!}
                            </div>
                            <blockquote>
                                {!! $testimonial->client !!}
                            </blockquote>
                        </div>
                    @endforeach
                </div>

                <button style="top: auto; bottom: 0; left: 100px; background: none;" class="section-button section-button-left client-left hidden-xs hidden-sm"><i class="fa fa-arrow-circle-o-left"></i></button>
                <button style="top: auto; bottom: 0; right: 100px; background: none;" class="section-button section-button-right client-right hidden-xs hidden-sm"><i class="fa fa-arrow-circle-o-right"></i></button>


                <div style="text-align:center; margin-top: 30px;">
                    <div class="cta-wrapper">
                        <a class="cta" href="#learn-more">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

    </section> --}}

    <section class="section-panel section-fluid-height" style="padding: 270px 0;">
        <button class="section-button section-button-left client-left hidden-xs hidden-sm"><i class="fa fa-arrow-circle-o-left"></i></button>
        <button class="section-button section-button-right client-right hidden-xs hidden-sm"><i class="fa fa-arrow-circle-o-right"></i></button>
        <div class="content-center">
            <h1 class="wedding-title">
                DON’T TAKE OUR WORD FOR IT<br>
                <small>LET’S HEAR FROM THE BRIDE AND GROOM</small>
            </h1>

            <div class="spacer" style="background: #fff;"></div>
            <div class="clients">
                @foreach(App\Services\Testimonials\Retrieve::random('wedding') as $testimonial)
                    <div class="client" style="color: #fff;">
                        <div class="quote quote__justified">
                            {!! $testimonial->content !!}
                        </div>
                        <blockquote style="color: #fff;">
                            {!! $testimonial->client !!}
                        </blockquote>
                    </div>
                @endforeach
            </div>
            <div class="spacer" style="background: #fff;"></div>
            <div class="wedding-button-group">
                <a href="{{ route('wedding.menus.show') }}">Wedding Menus</a>
                <a href="#learn-more">Learn More</a>
                <a href="#request-a-tasting">Request A Tasting</a>
            </div>
        </div>
    </section>

    <section id="learn-more"  class="section-panel section-white section-fluid-height padding">
        <div class="content-center">

            <h1 class="wedding-title alt">
                IT'S YOUR DAY, YOUR VISION<br>
                <small>WE'RE HERE TO HELP</small>
            </h1>
            <div class="spacer"></div>
            <p class="default">
                We would love the opportunity to work with you and create a memorable wedding experience tailored to your needs and wants. We are your escape from the cookie cutter menu offerings of maple-glazed salmon and rubber chicken dinners.
                <br><br>
                With us, you don’t just get a caterer, you get a team of experienced event and culinary professionals who have seen and done it all. We are here to make your vision come to life and provide a distinct culinary experience that leaves your guests buzzing.
            </p>

            <div class="wedding-button-group alt">
                <a href="#request-a-tasting">Request A Tasting</a>
            </div>

            {{-- <div class="cta-wrapper">
                <a class="cta black" href="#request-a-tasting">Request A Tasting</a>
            </div> --}}
        </div>
    </section>

    <section id="request-a-tasting"  class="section-panel section-dark section-fluid-height padding">
        <div class="content-center">

            <h1 class="wedding-title" style="text-shadow: none;">
                TASTING
            </h1>
            <div class="spacer"></div>
            <p class="default">
                Having trouble deciding which menu items to serve for your special day?
                <br><br>
                The tasting allows you to view how items will be plated and served for your guests to enjoy. This also allows you to have the opportunity to tailor the menu to your needs. We offer tastings at a flat rate of $175 for up to four people. Additional $55.00 per Person, for extra guests. Tasting fee is full refunded upon booking with us, which we are certain you will!
            </p>

            <div class="cta-wrapper">
                <a class="cta" href="#request-a-tasting">Request A Tasting</a>
            </div>
        </div>
    </section>


    <div class="directory-wrapper dark" style="background: #222;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="directory-header dark">Find the perfect venue</div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row directory-items m-grid">
                @foreach($venues as $venue)
                    @include('venues.venue', ['venue' => $venue, 'columnsClass' => 'col-md-4'])


                    {{-- <div class="col-md-4">
                        <a href="{{ route('venues.show', [$venue]) }}/{{ str_slug($venue->name) }}" class="directory-item">
                            @if($venue->image)
                                <div class="directory-item-background" style="background-image:url({{ $venue->image }})"></div>
                            @endif
                            <div class="directory-item-details">
                                <h3>{{ $venue->name }}</h3>
                                <table>
                                    <tr>
                                        <td align="right"><b>Location</b></td>
                                        <td>{{ $venue->location }}</td>
                                    </tr>

                                    <tr>
                                        <td align="right"><b>Reception</b></td>
                                        <td>{{ $venue->rececption_count }}</td>
                                    </tr>
                                    <tr>
                                        <td align="right"><b>Dining</b></td>
                                        <td>{{ $venue->dining_count }}</td>
                                    </tr>
                                </table>
                            </div>
                        </a>
                    </div> --}}
                @endforeach
            </div>

            <div style="text-align:center; padding-top: 10px; padding-bottom: 60px;">
                <div class="cta-wrapper">
                    <a class="cta" href="{{ route('venues.index') }}">See All Venues</a>
                </div>
            </div>
        </div>
    </div>

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
