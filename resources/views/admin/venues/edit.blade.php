@extends('layouts.app')

@section('htmlheader_title')
	Edit Venue
@endsection

@section('main-content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-plus"></i>
                    <h3 class="box-title">Edit Venue</h3>

                    <a href="{{ route('admin.venues.index') }}" class="btn btn-danger btn-xs pull-right">Cancel</a>
                </div>
                <div class="box-body pad table-responsive">

					<div class="col-md-6 col-md-offset-3">

						<form action="{{ route('admin.venues.save', [$venue]) }}" method="POST" enctype="multipart/form-data">

							{{ csrf_field() }}
                            {{ method_field('PUT') }}

							<div class="form-group">
								<label for="sorting_order">Sorting Priority</label>
								<input id="sorting_order" name="sorting_order" type="text" class="form-control" value="{{ old('sorting_order') ? old('sorting_order') : $venue->sorting_order }}" />
							</div>


							<div class="form-group">
								<label for="name">Name</label>
								<input id="name" name="name" type="text" class="form-control" value="{{ old('name') ? old('name') : $venue->name }}" />
							</div>

                            <div class="form-group">
								<label for="location">Location</label>
								<input id="location" name="location" type="text" class="form-control" value="{{ old('location') ? old('location') : $venue->location }}" />
							</div>

                            <div class="form-group">
								<label for="address">Address</label>
								<input id="address" name="address" type="text" class="form-control" value="{{ old('address') ? old('address') : $venue->address }}" />
							</div>

                            <div class="form-group">
								<label for="website">Website</label>
								<input id="website" name="website" type="text" class="form-control" value="{{ old('website') ? old('website') : $venue->website }}" />
							</div>

                            <div class="form-group">
								<label for="phonenumber">Phone Number</label>
								<input id="phonenumber" name="phonenumber" type="text" class="form-control" value="{{ old('phonenumber') ? old('phonenumber') : $venue->phonenumber }}" />
							</div>


                            <div class="form-group">
								<label for="contact_name">Contact Name</label>
                                <input id="contact_name" name="contact_name" type="text" class="form-control" value="{{ old('contact_name') ? old('contact_name') : $venue->contact_name }}" />
							</div>

                            <div class="form-group">
								<label for="rececption_count">Reception Count</label>
                                <input id="rececption_count" name="rececption_count" type="text" class="form-control" value="{{ old('rececption_count') ? old('rececption_count') : $venue->rececption_count }}" />
							</div>

                            <div class="form-group">
								<label for="dining_count">Dining Count</label>
                                <input id="dining_count" name="dining_count" type="text" class="form-control" value="{{ old('dining_count') ? old('dining_count') : $venue->dining_count }}" />
							</div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" type="text" class="form-control">{{ old('description') ? old('description') : $venue->description }}</textarea>
								<p class="help-block">
									[url=http://someurl.com/something]Check this out![/url]
								</p>
							</div>

							<div class="form-group">
								<label for="is_featured">Featured?</label>
								<select class="form-control" id="is_featured" name="is_featured">
									<option value="0" @if(!$venue->is_featured) selected="selected" @endif>No</option>
									<option value="1" @if($venue->is_featured) selected="selected" @endif>Yes</option>
								</select>
							</div>

							<div class="form-group">
								<label for="verified">Verified?</label>
								<select class="form-control" id="verified" name="verified">
									<option value="0" @if(!$venue->verified) selected="selected" @endif>No</option>
									<option value="1" @if($venue->verified) selected="selected" @endif>Yes</option>
								</select>
							</div>

							<div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control" />
                            </div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary pull-right">Save</button>
							</div>
							<div class="clearfix"></div>
						</form>

						<hr />

						@if($venue->image)
							Image URL: {{ $venue->image }}<br />
							<img src="{{ $venue->image }}" class="img-responsive" />
						@endif

					</div>
                </div>
            </div>
		</div>
	</div>

@endsection
