@extends('website.layout')

@section('content')

    <video autoplay loop muted poster="{{ asset('videos/intro_v2.png') }}" id="bgvid" style="background-image:url({{ asset('videos/intro_v2.png') }})">
        <source src="{{ asset('videos/intro_v2.webm') }}" type="video/webm">
        <source src="{{ asset('videos/intro_v2.mp4') }}" type="video/mp4">
    </video>

    <div class="bgimage" style="background-image:url({{ asset('videos/intro_v2.png') }})"></div>

    <section class="section-panel panel-fullscreen panel-fixed">
        <div class="panel-content middle">
            <h1>Welcome</h1>
            <div class="cta-wrapper">
                <a class="cta" href="{{ route('menus.show') }}">See Our Catering Menu</a>
            </div>
        </div>
    </section>

    <section class="section-panel section-white section-fluid-height padding">
        <div class="content-center">
            <h1>A Distinctive Social Experience</h1>
            <div class="spacer"></div>
            <p class="default">
                We are a <strong>one-stop shop</strong> for all of your catering and event planning needs.
                Whether you desire an elegant wedding reception, cocktail party, or a tailored thematic experience, we have you covered.
                From unique interpretations of classic dishes and skilfully prepared craft cocktails to memorable venues.
                <strong>Cocktails &amp; Canapés</strong> creates a distinctive social experience that leaves guests buzzing.
            </p>

            <div class="cta-wrapper">
                <a class="cta black" href="{{ route('contact.index') }}">Contact Us</a>
            </div>
        </div>
    </section>

    @if($canapes)
        <section class="section-panel panel-75 hidden-xs hidden-sm">
            <div class="menu-preview-image-container">

                <div class="menu-preview-title">
                    <h1>Canapes</h1>
                    <div class="cta-wrapper">
                        <a class="cta" href="{{ route('menus.show') }}">Catering Menu</a>
                    </div>
                </div>

                <div class="menu-image-preview-slider menu-image-preview-slider-1">
                    @foreach($canapes as $canape)
                        <div style="background-image:url({{ $canape->image }})"></div>
                    @endforeach
                </div>
            </div>
            <div class="menu-preview-content-container">
                <button class="left left-1"><i class="fa fa-arrow-circle-o-left"></i></button>
                <button class="right right-1"><i class="fa fa-arrow-circle-o-right"></i></button>

                <div class="menu-preview-content">
                    <div class="menu-content-preview-slider menu-content-preview-slider-1">
                        @foreach($canapes as $canape)
                            <div>
                                <h1>{{ $canape->name }}</h1>
                                <p>{{ $canape->description }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($dinners)
        <section class="section-panel panel-75  hidden-xs hidden-sm">
            <div class="menu-preview-content-container">
                <button class="left left-2 "><i class="fa fa-arrow-circle-o-left"></i></button>
                <button class="right right-2 "><i class="fa fa-arrow-circle-o-right"></i></button>

                <div class="menu-preview-content">
                    <div class="menu-content-preview-slider menu-content-preview-slider-2">
                        @foreach($dinners as $dinner)
                            <div>
                                <h1>{{ $dinner->name }}</h1>
                                <p>{{ $dinner->description }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="menu-preview-image-container">
                <div class="menu-preview-title">
                    <h1>Dinners</h1>
                    <div class="cta-wrapper">
                        <a class="cta" href="{{ route('menus.show') }}">Catering Menu</a>
                    </div>
                </div>

                <div class="menu-image-preview-slider menu-image-preview-slider-2">
                    @foreach($dinners as $dinner)
                        <div style="background-image:url({{ $dinner->image }})"></div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <section class="section-panel section-fluid-height section-white">
        <button class="section-button section-button-left client-left hidden-xs hidden-sm"><i class="fa fa-arrow-circle-o-left"></i></button>
        <button class="section-button section-button-right client-right hidden-xs hidden-sm"><i class="fa fa-arrow-circle-o-right"></i></button>
        <div class="content-center">
            <h1>Our Clients Are Our Biggest Fans</h1>
            <div class="spacer"></div>
            <div class="clients">
                @foreach(App\Services\Testimonials\Retrieve::random() as $testimonial)
                    <div class="client">
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
    </section>

    <section class="section-panel section-fluid-height section-dark">
        <div class="content-center">
            <h1>From The Blog</h1>
        </div>

        <div class="container">
            <div class="row blog-preview">
                @foreach($posts as $post)
                    <div class="col-md-4 blog-preview-item">
                        <a href="{{ route('blog.post', $post->slug) }}">
                            @if($post->image)
                                <div class="blog-preview-image" style="background-image: url({{ $post->image }})"></div>
                            @endif
                            <div class="blog-preview-content">
                                <h3>{{ $post->title }}</h3>
                                <small>
                                    Posted by {{ $post->user->name }} {{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}
                                </small>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="content-center" style="margin-top: 45px;">
            <div class="cta-wrapper">
                <a class="cta" href="{{ route('blog.index') }}">View More</a>
            </div>
        </div>
    </section>

    <section class="section-panel section-fluid-height section-white">
        <div class="content-center">
            <h1>Let's Talk</h1>
            <div class="cta-wrapper">
                <a class="cta black" href="{{ route('contact.index') }}">Contact Us</a>
            </div>
        </div>
    </section>
@endsection
