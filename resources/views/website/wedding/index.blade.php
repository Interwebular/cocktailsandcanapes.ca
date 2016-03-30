@extends('website.layout')

@section('body-classes')
dark
@endsection

@section('page-title') Weddings @endsection
@section('meta-description') Description @endsection
@section('meta-keywords') Keywords @endsection

@section('content')

    <div class="bgimage" style="background-image:url({{ asset('img/wedding/wedding1.jpg') }}); background-position: left center; display:block;"></div>


    <section class="section-panel panel-fullscreen panel-fixed">
        <div class="container-fluid">
            <div class="col-md-6" style="margin-top:220px">
                <h1 class="wedding-title">Weddings<br><small>A few accolades from happy couples:</small></h1>
                <div class="clients">
                    @foreach(App\Services\Testimonials\Retrieve::random('wedding') as $testimonial)
                        <div class="client client--white client--lg client--left wedding-page">
                            <div class="quote">
                                {{-- <span class="quote__left"><i class="fa fa-quote-left"></i></span> --}}
                                {!! $testimonial->content !!}
                                {{-- <span class="quote__right"><i class="fa fa-quote-right"></i></span> --}}
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

    </section>


    <section id="learn-more"  class="section-panel section-white section-fluid-height padding">
        <div class="content-center">

            <h1>Have fun with it, it's your day</h1>
            <div class="spacer"></div>
            <p class="default">
                Whether you desire an elegant formal sit down dinner, a family style dinning experience, or a cocktail soiree, we create a distinct social and culinary experience that will leave your guests buzzing. Say goodbye to the rubber chicken dinner.
            </p>

            <div class="cta-wrapper">
                <a class="cta black" href="{{ route('wedding.menus.show') }}">Wedding Catering Menu</a>
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
