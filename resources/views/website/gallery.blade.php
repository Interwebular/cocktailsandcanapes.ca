@extends('website.layout')

@section('meta-description') Browse our gallery that showcases Cocktails and Canapes most popular dishes. Can you see any of your favourite dishes from our menu in the gallery?  @endsection
@section('page-title') Gallery | Catering Vancouver | Cocktails and Canapes @endsection

@section('body-classes')
padding dark
@endsection

@section('content')

    <style>
        .grid:after {
          content: '';
          display: block;
          clear: both;
        }

        .grid-sizer,
        .grid-item {
          width: 33.333%;
        }

        .grid-item {
          float: left;
        }

        .grid-item img {
          display: block;
          max-width: 100%;
        }
    </style>

    <section class="section-panel section-dark section-fluid-height" style="padding:0">
        <div class="grid">
            <div class="grid-sizer"></div>
            @foreach($images as $image)
                <div class="grid-item">
                    <img class="lazy" src="{{ $image->url }}" />
                </div>
            @endforeach
        </div>

        <div style="text-align:center">
            {!! $images->render()  !!}
        </div>

        <div class="wedding-button-group alt" style="text-align: center;">
            <a href="#" data-toggle="modal" data-target="#tastingModal" style="border-color: white; color: white;">Book A Tasting</a>
        </div>
    </section>




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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.2.0/imagesloaded.pkgd.min.js"></script>
    <script>
        $(function(){
            var $grid = $('.grid').masonry({
                itemSelector: '.grid-item',
                percentPosition: true,
                columnWidth: '.grid-sizer',
            });

            $grid.imagesLoaded().progress( function() {
              $grid.masonry('layout');
            });
        });
    </script>

@endsection
