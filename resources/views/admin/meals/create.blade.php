@extends('layouts.app')

@section('htmlheader_title')
	Add User
@endsection

@section('main-content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-plus"></i>
                    <h3 class="box-title">Create Meal</h3>
					<a href="{{ route('admin.menus.show', [$menu]) }}" class="btn btn-info btn-xs pull-right">Back to Menu</a>
                </div>
                <div class="box-body pad table-responsive">

					<div class="col-md-6 col-md-offset-3">
						<form action="{{ $category ? route('admin.menus.categories.meals.store', [$menu, $category]) : route('admin.menus.meals.store', [$menu]) }}" method="POST" enctype="multipart/form-data">

							{{ csrf_field() }}

							<div class="form-group">
								<label for="name">Name</label>
								<input id="name" name="name" type="text" class="form-control" value="{{ old('name') }}" />
							</div>

                            <div class="form-group">
								<label for="description">Description</label>
                                <textarea id="description" name="description" class="form-control">{{ old('description') }}</textarea>
							</div>

                            <div class="form-group">
                                <label for="gluten_free">Gluten Free</label>
                                <select class="form-control" name="gluten_free" id="gluten_free">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>

							<div class="form-group">
                                <label for="vegetarian">Vegetarian</label>
                                <select class="form-control" name="vegetarian" id="vegetarian">
                                    <option value="0">No</option>
                                    <option value="1">Yes</option>
                                </select>
                            </div>

							<div class="form-group">
                                <label for="is_full_width">Display Width</label>
                                <select class="form-control" name="is_full_width" id="is_full_width">
                                    <option value="0">Regular</option>
                                    <option value="1">Large</option>
                                </select>
                            </div>

							<div class="form-group">
								<label for="image">Upload An Image</label>
								<input type="file" name="image" class="form-control" />
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
