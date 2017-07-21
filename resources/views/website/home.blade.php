@extends('website.layout')

@section('meta-description') Whether you desire an elegant wedding reception, cocktail party, or a tailored thematic experience, Cocktails & Canapes Event Planning and Catering Company in Vancouver and beyond has you covered. @endsection
@section('page-title') Cocktails & Canapes | Event and Catering Company Vancouver @endsection

@section('content')


    {{-- <video autoplay loop muted poster="{{ asset('videos/intro_v2.png') }}" id="bgvid" style="background-image:url({{ asset('videos/intro_v2.png') }})">
        <source src="{{ asset('videos/intro_v3.webm') }}" type="video/webm">
        <source src="{{ asset('videos/intro_v3.mp4') }}" type="video/mp4">
    </video> --}}


    {{-- <div class="bgimage" style="background-image:url({{ asset('videos/intro_v2.png') }})"></div> --}}
    {{-- <div class="bgimage" style="background-image:url({{ asset('img/sushi_darker.jpg') }})"></div> --}}
    <div class="bgimage" style="background-image:url({{ asset('img/tasteofsummerbg.jpg') }})"></div>

    <section class="section-panel panel-fullscreen panel-fixed">
        <div class="panel-content upper">
            
            <img src="{{ asset('img/tasteofsummer2.png') }}" alt="Cocktails And Canapes"/>

            <h1 class="alt" style="margin-top: 40px;">BOOK YOUR SUMMER BBQ NOW</h1>

            <div class="cta-wrapper">
                <a class="cta" href="{{ route('menus.show') }}/bbq">BBQ Menu</a>
            </div>
        </div>

        <div class="side-content side-content--left">
            Louisiana<br />
            <strong>Pork Ribs</strong><br />
            Pg. 3.

            <br /><br />
            <strong>
            Blackened<br />Salmon
            </strong><br />
            Sandwhich<br />
            Pg. 3.
        </div>

        <div class="side-content side-content--right">
            <strong>Smoked<br />Tomato</strong><br />
            Pasta Salad<br />
            Pg. 3.
        </div>
    </section>

    <section class="section-panel section-white section-fluid-height padding">
        <div class="content-center">
            <h1 class="skinny">
            Through unique food and drink and unparalleled service, Cocktails &amp; Canapes' primary mission is to make your event truly unforgettable!
            </h1>
            <div class="spacer"></div>
            <p class="default">
               Cocktails and Canapes is Vancouver's premier catering company.</p>
            <p class="default">We specialize in creating a one-of-a kind innovative experience for each of our clients. There is no “cookie-cutter” menu with us. Our clients are offered an abundance of catering services and menus to choose from including canapes, plated fine-dining, family-style dinners, platters, buffets, craft cocktails, and more.</p>
            <h3>Large or small, tradidional or modern</h3>
            <p class="default">Whether you’re holding a traditional sit-down wedding for 300 guests, an intimate birthday party for close friends and family, or a mid-sized corporate function, Cocktails and Canapes is more than happy to accommodate your catering needs.</p>
            <p class="default">Cocktails and Canapes prides ourselves on offering a broad range of catering services in Vancouver, including craft cocktails, unparalleled plated dinners, unprecedented canapes and corporate catering - to name a few.</p>
            <p class="default">Our special event catering services have impressed a wide roster of clients, from Diner En Blanc Vancouver to TEDx.  Read more about what our clients have had to say about us here.</p>
            <h3>Fresh, seasonal ingredients</h3>
            <p class="default">Cocktails and Canapes serves the freshest, seasonal BC ingredients. There’s nothing more we love than combining Pacific Northwest ingredients to create emerging and delicious dishes, alongside our version of tried and tested classic North American dishes. Cocktails and Canapes prides ourselves on the quality, dedication, and care we put into each event - no matter how big or small.</p>
            <h3>Professional, highly trained staff</h3>
            <p class="default">Our staff are efficient, friendly, and incredibly well-trained in their profession. We have a team of trained mixologists who will ensure your guest’s thirsts are more than adequately quenched, and our team of front of house staff are always on hand to serve you or answer any questions you may have.</p>
            <p class="default">The Cocktails and Canapes team of chefs are the backbone of our business. Their skills, knowledge, and experience will help create an event that you’ll remember for a lifetime.</p>
            <h3>Special event catering services</h3>
            <p class="default">Cocktails and Canapes knows Vancouver and the Lower Mainland like the back of their hand. We can help you find the perfect venue for your wedding, event, or function.</p>
            <p class="default">We’re more than just another run-of-the-mill catering company. Cocktails and Canapes will help make your special day or event even more memorable. Get in touch to find out more.</p>
            <div class="cta-wrapper" style="margin-top: 20px;">
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
