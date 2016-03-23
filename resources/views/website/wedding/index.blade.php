@extends('website.layout')

@section('body-classes')
dark
@endsection

@section('page-title') Weddings @endsection
@section('meta-description') Description @endsection
@section('meta-keywords') Keywords @endsection

@section('content')
    <video autoplay loop muted poster="{{ asset('videos/intro_v2.png') }}" id="bgvid" style="background-image:url({{ asset('videos/intro_v2.png') }})">
        <source src="{{ asset('videos/intro_v2.webm') }}" type="video/webm">
        <source src="{{ asset('videos/intro_v2.mp4') }}" type="video/mp4">
    </video>

    <div class="bgimage" style="background-image:url({{ asset('videos/intro_v2.png') }})"></div>

    {{-- <section class="section-panel panel-fullscreen panel-fixed">
        <div class="panel-content middle">
            <h1>Welcome</h1>
            <div class="cta-wrapper">
                <a class="cta" href="{{ route('menus.show') }}">Catering Menu</a>
            </div>
        </div>
    </section> --}}

    <section class="section-panel panel-fullscreen panel-fixed">
        <button class="section-button section-button-left client-left hidden-xs hidden-sm"><i class="fa fa-arrow-circle-o-left"></i></button>
        <button class="section-button section-button-right client-right hidden-xs hidden-sm"><i class="fa fa-arrow-circle-o-right"></i></button>

        <div class="container">
            <div class="col-md-6 col-md-offset-3" style="margin-top: 250px;">
                <div class="clients">
                    @foreach(App\Services\Testimonials\Retrieve::random('wedding') as $testimonial)
                        <div class="client client--white client--lg">
                            <div class="quote">
                                <span><i class="fa fa-quote-left"></i></span>
                                {!! $testimonial->content !!}
                                <span><i class="fa fa-quote-right"></i></span>
                            </div>
                            <blockquote>
                                {!! $testimonial->client !!}
                            </blockquote>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section>


    <section class="section-panel section-white section-fluid-height padding">
        <div class="content-center">

            <h1>Have fun with it, it's your day</h1>
            <div class="spacer"></div>
            <p class="default">
                Whether you desire an elegant formal sit down dinner, a family style dinning experience, or a cocktail soiree, we create a distinct social and culinary experience that will leave your guests buzzing. Say goodbye to the rubber chicken dinner.
            </p>

            <div class="cta-wrapper">
                <a class="cta black" href="{{ route('contact.index') }}">Contact Us</a>
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
            <div class="row directory-items">
                @foreach($venues as $venue)
                    <div class="col-md-4">
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
                    </div>
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
