@extends('website.layout')

@section('body-classes')
dark
@endsection

@section('meta-description') Our Vancouver based company is experienced in corporate catering.  Whether you are looking to have a wedding, large or small, our team will have your special day covered. @endsection
@section('page-title') Vancouver Corporate Catering Company | Cocktails & Canapes @endsection

@section('content')

    <div class="bgimage" style="background-image:url({{ asset('img/corporate-new-img-min.jpg') }}); background-position: left center; display:block;"></div>

    <section class="section-panel section-fluid-height" style="padding: 270px 0;">
        <button class="section-button section-button-left client-left hidden-xs hidden-sm"><i class="fa fa-arrow-circle-o-left"></i></button>
        <button class="section-button section-button-right client-right hidden-xs hidden-sm"><i class="fa fa-arrow-circle-o-right"></i></button>
        <div class="content-center">
            <h1 class="wedding-title">
                DON’T TAKE OUR WORD FOR IT<br>
                <small>LET’S HEAR FROM OUR CLIENTS</small>
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
                <a href="{{ route('menus.show') }}">Corporate Menus</a>
                <a href="#learn-more">Learn More</a>
                <!-- <a href="#" data-toggle="modal" data-target="#tastingModal">Request A Tasting</a> -->
                <a @if(Request::route()->getName() === 'events' || Request::route()->getName() === 'events') class="active" @endif href="{{ route('events') }}">Book now</a>

            </div>
        </div>
    </section>

    <section id="learn-more"  class="section-panel section-white section-fluid-height padding">
        <div class="content-center">

            <h1 class="wedding-title alt">
                Corporate Catering
            </h1>
            <div class="spacer"></div>
            <p class="default">
                Corporate catering doesn’t have to mean boring, dry sandwiches and potato chips. With Cocktails and Canapes, office party catering will become a whole lot more exciting, much to the delight of your colleagues and guests. We have years of experience in providing catering services for upwards of 3,000 guests, which makes us the ideal hire for any large event. 
                <br><br>
                We also provide office lunch catering from our well-received <a href="https://cocktailsandcanapes.ca/event-catering-menus/lunch" target="_blank">lunch menu</a>. Served on freshly baked baguettes, fillings include Pineapple and Beef with Arugula and a Chipotle Mayo; Chicken Banh mi; Apricot Glazed Smoked Ham with Double Cream Brie and a Fenugreek Dressing; and Oven-Dried Tomato with a Basil Pesto and Manchego Cheese. 
                <br><br>
                Cocktails and Canapes don’t just stop at delicious, mouth-watering baguettes. We also provide lunch time catering in the form of fresh salads and bowls, including Quinoa Tabbouleh, Kale and Soba Salad, Taco Salad, and a gluten-free Harvest Salad.
                <br><br>
                Many of our lunch menu items can be made vegetarian and we also offer a great selection of gluten-free menu items for corporate events. 
                <br><br>
                We understand that not all corporate events occur during lunch or dinner. That’s why we created our <a href="https://cocktailsandcanapes.ca/event-catering-menus/breakfast-canapes" target="_blank">breakfast canapé menu</a>, as well as <a href="https://cocktailsandcanapes.ca/event-catering-menus/breakfast" target="_blank">hot breakfast catering</a> for those early starts. 
                <br><br>
                Choose from Breakfast Burritos, Pastries, and a selection of Fresh Fruit, or nibble on canapes that include Smoked Bacon Profiterole Sliders with Maple Syrup Aioli and Quails Egg; Mini Spinach Eggs Benedict; and Savoury Cheesecake with Goat Cheese filling and Balsamic Onion Jam. 
                <br><br>
                Both of these menus are perfect for early morning meetings, breakfast events, or simply because you feel like treating your staff.


               <!--  We would love the opportunity to work with you and create a memorable wedding experience tailored to your needs and wants. We are your escape from the cookie cutter menu offerings of maple-glazed salmon and rubber chicken dinners.
                <br><br>
                With us, you don’t just get a caterer, you get a team of experienced event and culinary professionals who have seen and done it all. We are here to make your vision come to life and provide a distinct culinary experience that leaves your guests buzzing. -->
            </p>

            <div class="wedding-button-group alt">
                <a href="#request-a-tasting">Interested In A Tasting?</a>
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

    <section id="request-a-tasting"  class="section-panel section-dark section-fluid-height padding">
        <div class="content-center">

            <h1 class="wedding-title" style="text-shadow: none;">
                TASTING
            </h1>
            <div class="spacer"></div>
            <p class="default">
                Having trouble deciding which menu items to serve for your special day? 
                <br><br>
                The tasting allows you to view how items will be plated and served for your guests to enjoy. This also allows you to have the opportunity to tailor the menu to your needs. We offer tastings at a flat rate of $200 for up to four people. The tasting fee is fully refunded upon booking with us, which we are certain you will!
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
The tasting allows you to view how items will be plated and served for your guests to enjoy. This also allows you to have the opportunity to tailor the menu to your needs. We offer tastings at a flat rate of $200 for up to four people. The tasting fee is fully refunded upon booking with us, which we are certain you will!            </p>
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
                  <button type="submit" onclick='javascript:sendEmailEvent();' class="submit-btn btn btn-primary btn-lg pull-right">Submit</button>
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
