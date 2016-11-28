@extends('website.layout')

@section('page-title') Vancouver Corporate Event Catering @endsection

@section('body-classes')
padding dark
@endsection

@section('content')

    <div class="bgimage" style="background-image:url({{ asset('img/landing/lunch.jpg') }})"></div>
    <section class="section-panel section-fluid-height" style="padding-top: 20px">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h1 style="text-align: center; color: #fff;margin-bottom: 50px;">Let us take care of the details so you can enjoy the party</h1>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <p class="default" style="color:#fff;padding: 0 15px;">
                    We really shine when catering Corporate Events because we genuinely get excited by
                    the experiences we create with our clients. They have ideas, and we know how to
                    facilitate those ideas with the best one-stop-shop catering services.  

                    {{-- Here’s just a few of
                    our notable corporate events and clients to date. --}}
                </p>

                {{-- <div style="text-align:center;">
                    <div class="cta-wrapper">
                        <a class="cta" href="{{ route('menus.show') }}">Menu</a>
                    </div>
                </div> --}}
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6" style="background: #fff;padding-top: 15px; padding-bottom: 15px;">
                <h4>Book your corporate event now</h4>
                <p class="help-block">
You have ideas! Let’s talk about them. Every single event we’ve catered has always
been unique in its own special way! No two clients are alike, that’s why we can
customize anything according to your specific needs. Let’s talk about your unique
concept event experience.
                </p>
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
