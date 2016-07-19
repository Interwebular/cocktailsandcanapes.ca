@extends('website.layout')

@section('meta-description') Cocktails & Canapes event planning and catering company in Vancouver offers full event planning and catering services. From corporate holiday parties to weddings, we do it all.  @endsection
@section('page-title') Contact Cocktails & Canapes | Vancouver Caterers @endsection

@section('body-classes')
padding dark
@endsection

@section('content')



    <section class="section-panel section-header section-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="heading">Contact Us</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section-panel section-white section-fluid-height">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <p class="help-block">
                        Please call us at 604.424.8788, or complete the form below.
                    </p>
                    <hr>

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

                <div class="col-md-4">
                    <div class="">
                        <p>
                            604.424.8788<br>
                            @include('partials.email', ['linkTextAsEmail' => true])
                        </p>
                        <p>
                            <strong>Mailing Address:</strong><br>
                            150 – 351 Abbott St.<br>
                            P.O. Box 98882<br>
                            Vancouver, BC V6B 0M4
                        </p>
                        <p>
                            <strong>Commissary Address:</strong><br>
                            686 Powell St.<br>
                            Vancouver, BC V6A 3G1<br>
                        </p>
                    </div>
                </div>
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
