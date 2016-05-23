@extends('website.layout')

@section('body-classes')
dark
@endsection

@section('page-title') The OFFICIAL CATERING COMPANY OF 8TH ANNUAL DEIGHTON CUP @endsection

@section('content')

    <div class="bgimage" style="background-image:url(http://deightoncup.com/images/img3.jpg); display:block;"></div>

    <section class="section-panel section-fluid-height" style="padding: 270px 0;">
        <div class="content-center">
            <h1 class="wedding-title">
                <small>The official catering company of 8th annual</small><br>
                DEIGHTON CUP
            </h1>
        </div>
    </section>


    <section class="section-panel section-white section-fluid-height padding">
        <div class="content-center">

            <h1 class="wedding-title alt">
                Write Up 1
            </h1>
            <div class="spacer"></div>
            <p class="default">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>

            <div class="wedding-button-group alt">
                <a href="#request-a-tasting">Call To Action</a>
            </div>

        </div>
    </section>

    <section class="section-panel section-dark section-fluid-height padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Main Lunch <small>Complimentary With Ticket Purchase</small></h1>
                    <div class="spacer" style="background-color: #fff; margin: 50px auto;"></div>
                    <div class="menu-v2 row">

                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="skinny">Smoked Bo Ssam Beef Brisket Sandwich</h2>
                            <p>
                                Texas Style '63 Acres' Smoked Beef Brisket, Pickled Zucchini, Black Kale, Sesame Ginger BBQ Glaze, Ssam Sauce on a Crusty Bap Bun
                                <br><br>
                                Comes with Vietnamese Style Slaw and Confit Pemberton Potato Salad
                            </p>

                            <h1 class="text-center" style="padding: 30px 0;">- OR -</h1>
                            <h2 class="skinny">Korean BBQ Shrimp on Grits</h2>
                            <p>
                                Korean BBQ 'Oceanwise' Shrimp, White Corn Grits, Sunflower Sprout Salad, Fried Onions, Red Chilies, Green Onion
                            </p>

                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>

    <section class="section-panel section-white section-fluid-height padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center">Stations <small>$7</small></h1>
                    <div class="spacer" style="margin: 50px auto;"></div>
                    <div class="menu-v2 row">

                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="skinny" style="margin: 30px 0 10px 0;">Pickled French Fry Cone</h2>
                            <p>
                                Pickled Russet Potatoes, Sriracha Mayo, 5 Spice Hoi Sin, Green Onion, Fried Shallots, Green Onion & Garlic Sauce, Sesame seeds
                            </p>

                            <h2 class="skinny" style="margin: 30px 0 10px 0;">Popcorn Chicken Cones</h2>
                            <p>
                                Juicy Fried Buttermilk Chicken, Ginger-Sweet Soy Sauce, Fresh Watermelon
                            </p>

                            <h2 class="skinny" style="margin: 30px 0 10px 0;">Fried Chicken Waffle Taco</h2>
                            <p>
                                Buttermilk Waffle, Fried Chicken, Maple Mayonnaise, Maple Syrup, Vietnamese Slaw
                            </p>

                        </div>
                    </div>



                </div>
            </div>
        </div>
    </section>

    <section class="section-panel section-dark section-fluid-height padding">
        <div class="content-center">

            <h1 class="wedding-title" style="text-shadow: none;">
                Write Up 2
            </h1>
            <div class="spacer"></div>
            <p class="default">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>

            <div class="cta-wrapper">
                <a class="cta" href="#" data-toggle="modal" data-target="#tastingModal">Call To Action</a>
            </div>
        </div>
    </section>





{{-- <div class="modal fade" id="tastingModal" tabindex="-1" role="dialog" aria-labelledby="tastingModalLabel">
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
</div> --}}


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
