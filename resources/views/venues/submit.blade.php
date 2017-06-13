@extends('website.layout')

@section('page-title') Submit Your Venue | Wedding Venue | Cocktails and Canapes @endsection
@section('meta-description') Do you run a venue or event space in Vancouver and surrounding areas? Would you like to be on our listings? Submit your venue to us today! @endsection
@section('body-classes')
padding dark
@endsection

@section('content')



    <section class="section-panel section-header section-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="heading">Submit Your Venue</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="section-panel section-white section-fluid-height">
        <div class="container">
            <div class="row">
                <div class="col-md-8">

                    <p class="help-block">
                        Please call us at 604.424.8788, or complete the form below to have your venue added to our database.
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

                    <form action="{{ route('venues.postSubmit') }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
						<div class="form-group">
							<label for="name">Name</label>
							<input id="name" name="name" type="text" class="form-control" value="{{ old('name') }}" />
						</div>

                        <div class="form-group">
							<label for="location">Location</label>
							<input id="location" name="location" type="text" class="form-control" value="{{ old('location') }}" />
						</div>

                        <div class="form-group">
							<label for="address">Address</label>
							<input id="address" name="address" type="text" class="form-control" value="{{ old('address') }}" />
						</div>

                        <div class="form-group">
							<label for="website">Website</label>
							<input id="website" name="website" type="text" class="form-control" value="{{ old('website') }}" />
						</div>

                        <div class="form-group">
							<label for="phonenumber">Phone Number</label>
							<input id="phonenumber" name="phonenumber" type="text" class="form-control" value="{{ old('phonenumber') }}" />
						</div>


                        <div class="form-group">
							<label for="contact_name">Contact Name</label>
                            <input id="contact_name" name="contact_name" type="text" class="form-control" value="{{ old('contact_name') }}" />
						</div>

                        <div class="form-group">
							<label for="rececption_count">Reception Count</label>
                            <input id="rececption_count" name="rececption_count" type="text" class="form-control" value="{{ old('rececption_count') }}" />
						</div>

                        <div class="form-group">
							<label for="dining_count">Dining Count</label>
                            <input id="dining_count" name="dining_count" type="text" class="form-control" value="{{ old('dining_count') }}" />
						</div>
                        <div class="form-group">
                            <label for="meta_title">Meta-Title</label>
                            <input id="meta_title" name="meta_title" type="text" class="form-control" value="{{ old('meta_title') ? old('meta_title') : $venue->meta_title }}" />
                        </div>
                        <div class="form-group">
                            <label for="meta_description">Meta-Description</label>
                            <textarea id="meta_description" name="meta_description" type="text" class="form-control">{{ old('meta-description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea id="description" name="description" type="text" class="form-control">{{ old('description') }}</textarea>
                        </div>

						<div class="form-group">
                            <label for="image">Upload An Image</label>
                            <input type="file" name="image" class="form-control" />
                        </div>

                        <div class="form-group">
                            {!! Recaptcha::render() !!}
                        </div>
                        <div class="form-group">
                            <button type="submit" class="submit-btn btn btn-primary btn-lg pull-right dark">Submit</button>
                        </div>
                    </form>
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
