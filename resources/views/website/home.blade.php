@extends('website.layout')

@section('meta-description') Whether you desire an elegant wedding reception, cocktail party, or a tailored thematic experience, Cocktails & Canapes Event Planning and Catering Company in Vancouver and beyond has you covered. @endsection
@section('page-title') Cocktails & Canapes | Event and Catering Company Vancouver @endsection

@section('content')


    <video autoplay loop muted poster="{{ asset('videos/intro_v2.png') }}" id="bgvid" style="background-image:url({{ asset('videos/intro_v2.png') }})">
        <source src="{{ asset('videos/intro_v3.webm') }}" type="video/webm">
        <source src="{{ asset('videos/intro_v3.mp4') }}" type="video/mp4">
    </video>


    {{-- <div class="bgimage" style="background-image:url({{ asset('videos/intro_v2.png') }})"></div> --}}
    {{-- <div class="bgimage" style="background-image:url({{ asset('img/sushi_darker.jpg') }})"></div> --}}

    <section class="section-panel panel-fullscreen panel-fixed">
        <div class="panel-content middle">
            <h1 class="alt">A Distinct Culinary Experience</h1>
            {{-- <img src="{{ asset('img/logo_full.png') }}" alt="Cocktails And Canapes"/>
            <br />
            <br />
            <br /> --}}
            <div class="cta-wrapper">
                <a class="cta" href="{{ route('menus.show') }}">Catering Menu</a>
            </div>
        </div>
    </section>

    <section class="section-panel section-white section-fluid-height padding">
        <div class="content-center">
            <h1 class="skinny">
            Through unique food and drink and unparalleled service, Cocktails &amp; Canapes' primary mission is to make your event truly unforgettable!
            </h1>
            <div class="spacer"></div>
            <p class="default">
                Here's why: We dish it up in style! We only serve the most innovative and appealing dishes made from 
                local fresh harvest and seasonal ingredients. We specialize in canapes, craft cocktails, custom menus, 
                plated dinners, and chef-manned food stations. 
                <br><br>
                Conceptualized themed large or small scale weddings, cocktail soirees, Christmas parties, corporate parties, 
                and Grandma's 90th birthday. You get the idea; we take care of every detail. Set the stage for a distinctive 
                social experience that will make your event the best buzz in town - seriously. 
                <br><br>
                Don’t worry, our teams got your back!
            </p>

            <div class="cta-wrapper">
                <a class="cta black" href="{{ route('contact.index') }}">Contact Us</a>
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
                <a class="menu-preview-link" href="/event-catering-menus/plated-dinner-fine">Full Menu</a>
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

    @if($canapes)
        <section class="section-panel panel-75 hidden-xs hidden-sm">
            <div class="menu-preview-image-container">
                <div class="menu-image-preview-slider menu-image-preview-slider-1">
                    @foreach($canapes as $canape)
                        <div style="background-image:url({{ $canape->image }})"></div>
                    @endforeach
                </div>
            </div>
            <div class="menu-preview-content-container">
                <button class="left left-1"><i class="fa fa-arrow-circle-o-left"></i></button>
                <button class="right right-1"><i class="fa fa-arrow-circle-o-right"></i></button>

                <h1 class="menu-preview-title">
                    Canapes Menu
                </h1>

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

                <a class="menu-preview-link" href="/event-catering-menus/hot-canapes">Full Menu</a>
            </div>
        </section>
    @endif

    <section class="section-panel section-fluid-height section-white">
        <button class="section-button section-button-left client-left hidden-xs hidden-sm"><i class="fa fa-arrow-circle-o-left"></i></button>
        <button class="section-button section-button-right client-right hidden-xs hidden-sm"><i class="fa fa-arrow-circle-o-right"></i></button>
        <div class="content-center">
            <h1 class="skinny">Our Clients Are Our Biggest Fans</h1>
            <div class="spacer"></div>
            <div class="clients">
                @foreach(App\Services\Testimonials\Retrieve::random() as $testimonial)
                    <div class="client">
                        <div class="quote quote__justified">
                            {!! $testimonial->content !!}
                        </div>
                        <blockquote>
                            {!! $testimonial->client !!}
                        </blockquote>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- <section class="section-panel section-fluid-height section-dark">
        <div class="content-center">
            <h1>Recent News</h1>
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
    </section> --}}

    <section class="section-panel section-fluid-height section-white" style="padding: 0">

        <div class="gallery">
            <div class="background-images">
                @foreach($images as $image)
                    <a href="{{ url('/gallery') }}" class="background-image" style="background-image: url({{ $image->url }})"></a>
                @endforeach
                <div class="clearfix"></div>
            </div>
        </div>


    </section>
@endsection
