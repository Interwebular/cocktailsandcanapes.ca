@extends('layouts.app')

@section('htmlheader_title')
	Add Venue
@endsection

@section('main-content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-plus"></i>
                    <h3 class="box-title">Create Venue</h3>

                    <a href="{{ route('admin.venues.index') }}" class="btn btn-danger btn-xs pull-right">Cancel</a>
                </div>
                <div class="box-body pad table-responsive">

					<div class="col-md-6 col-md-offset-3">

						<form action="{{ route('admin.venues.store') }}" method="POST">

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
                                <label for="description">Description</label>
                                <textarea id="description" name="description" type="text" class="form-control">{{ old('description') }}</textarea>
                            </div>

							<div class="form-group">
								<label for="is_featured">Featured?</label>
								<select class="form-control" id="is_featured" name="is_featured">
									<option value="0">No</option>
									<option value="1">Yes</option>
								</select>
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary pull-right">Create</button>
							</div>

						</form>
					</div>


                </div>
            </div>
		</div>
	</div>

@endsection
