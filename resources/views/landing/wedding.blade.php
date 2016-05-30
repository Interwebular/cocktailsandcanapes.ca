@extends('website.layout')

@section('page-title') Tasting is Free! - Vancouver Wedding Catering @endsection

@section('body-classes')
padding dark
@endsection

@section('content')

    <div class="bgimage" style="background-image:url({{ asset('img/landing/weddingbg.jpg') }})"></div>
    <section class="section-panel section-fluid-height" style="padding-top: 20px">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 style="text-align: center; color: #fff;margin-bottom: 50px;">Say Goodbye To Rubber Chicken Dinners</h1>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <p class="default" style="color:#fff;padding: 0 15px;">
                    Having trouble deciding which menu items to serve for your special day?
                    <br><br>
                    The tasting allows you to view how items will be plated and served for your guests to enjoy. This also allows you to have the opportunity to tailor the menu to your needs. We offer tastings at a flat rate of $175 for up to four people. Additional $55.00 per Person, for extra guests.
                    <strong>Tasting fee is fully refunded upon booking with us, which we are certain you will!</strong>
                </p>

                <div style="text-align:center;">
                    <div class="cta-wrapper">
                        <a class="cta" href="{{ route('weddings.index') }}">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6" style="background: #fff;padding-top: 15px; padding-bottom: 15px;">
                <h4>Book your free tasting now</h4>
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
                        <button type="submit" onclick='javascript:sendEmailEvent();' class="submit-btn btn btn-primary btn-lg pull-right dark">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection

@section('js')

    <script>
        $('.submit-btn').click(function(e) {
            var $button = $(this);
            $button.prop('disabled', true);
            $button.html('<i class="fa fa-spinner fa-spin"></i>');
            $button.closest('form').submit();
        });
    </script>

@endsection
