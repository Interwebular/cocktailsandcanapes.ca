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
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <a href="{{ route('wedding.menus.show') }}">Wedding Menus</a>
                <a href="#learn-more">Learn More</a>
                <a href="#" data-toggle="modal" data-target="#tastingModal">Request A Tasting</a>
            </div>
        </div>
    </section>

    <section id="learn-more"  class="section-panel section-white section-fluid-height padding">
        <div class="content-center">

            <h1 class="wedding-title alt">
                Bringing your vision to life
            </h1>
            <div class="spacer"></div>
            <p class="default">
                We would love the opportunity to work with you and create a memorable wedding experience tailored to your needs and wants. We are your escape from the cookie cutter menu offerings of maple-glazed salmon and rubber chicken dinners.
                <br><br>
                With us, you don’t just get a caterer, you get a team of experienced event and culinary professionals who have seen and done it all. We are here to make your vision come to life and provide a distinct culinary experience that leaves your guests buzzing.
            </p>

            <div class="wedding-button-group alt">
                <a href="#request-a-tasting">Interested In A Tasting?</a>
            </div>

            {{-- <div class="cta-wrapper">
                <a class="cta black" href="#request-a-tasting">Request A Tasting</a>
            </div> --}}
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
                <a class="cta" href="#" data-toggle="modal" data-target="#tastingModal">Request A Tasting</a>
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



<div class="modal fade" id="tastingModal" tabindex="-1" role="dialog" aria-labelledby="tastingModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="tastingModalLabel">Request A Tasting</h4>
      </div>
      <div class="modal-body">
            <p class="default" style="font-size: 1em;">
                Having trouble deciding which menu items to serve for your special day?
                <br><br>
                The tasting allows you to view how items will be plated and served for your guests to enjoy. This also allows you to have the opportunity to tailor the menu to your needs. We offer tastings at a flat rate of $175 for up to four people. Additional $55.00 per Person, for extra guests. Tasting fee is full refunded upon booking with us, which we are certain you will!
            </p>
          <form action="{{ route('contact.submit') }}" method="POST">
              {{ csrf_field() }}
              <div class="form-group">
                  <label for="name">Name *</label>
                  <input type="text" id="name" name="name" class="form-control input-lg" value="{{ old('name') }}" />
              </div>
              <div class="form-group">
                  <label for="email">Email *</label>
                  <input type="email" id="email" name="email" class="form-control input-lg" value="{{ old('email') }}" />
              </div>
              <div class="form-group">
                  <label for="phone_number">Phone Number *</label>
                  <input type="text" id="phone_number" name="phone_number" class="form-control input-lg" value="{{ old('phone_number') }}" />
              </div>
              <div class="form-group">
                  <label for="message">Message *</label>
                  <textarea name="message" id="message" class="form-control input-lg">{{ old('message') }}</textarea>
              </div>
              <div class="form-group">
                  {!! Recaptcha::render() !!}
              </div>
              <div class="form-group">
                  <button type="submit" class="submit-btn btn btn-primary btn-lg pull-right">Submit</button>
                  <div class="clearfix"></div>
              </div>
          </form>

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
