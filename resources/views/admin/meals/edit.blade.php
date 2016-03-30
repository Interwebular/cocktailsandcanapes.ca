@extends('layouts.app')

@section('htmlheader_title')
	Edit Meal
@endsection

@section('main-content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-plus"></i>
                    <h3 class="box-title">{{ $meal->name }}</h3>

                    <a href="{{ route('admin.menus.show', [$menu]) }}" class="btn btn-info btn-xs pull-right">Back to Menu</a>
                </div>
                <div class="box-body pad table-responsive">

					<div class="col-md-6 col-md-offset-3">

						<form action="{{ route('admin.menus.meals.save', [$menu, $meal]) }}" method="POST" enctype="multipart/form-data">

							{{ csrf_field() }}
                            {{ method_field('PUT') }}

							<div class="form-group">
								<label for="sorting_order">Sorting Order</label>
								<input id="sorting_order" name="sorting_order" type="text" class="form-control" value="{{ old('sorting_order') ? old('sorting_order') : $meal->sorting_order }}" />
							</div>

							<div class="form-group">
								<label for="name">Name</label>
								<input id="name" name="name" type="text" class="form-control" value="{{ old('name') ? old('name') : $meal->name }}" />
							</div>

                            <div class="form-group">
								<label for="description">Description</label>
                                <textarea id="description" name="description" class="form-control">{{ old('description') ? old('description') : $meal->description }}</textarea>
							</div>

							<div class="form-group">
								<label for="category">Change Category</label>
								<select class="form-control" name="category" id="category">
									<option value="0">Uncategorized</option>
									@foreach($menu->categories as $category)
										<option value="{{ $category->id }}" @if($meal->category_id == $category->id) selected="selected" @endif>{{ $category->name }}</option>
									@endforeach
								</select>
							</div>

                            <div class="form-group">
                                <label for="gluten_free">Gluten Free</label>
                                <select class="form-control" name="gluten_free" id="gluten_free">
                                    <option value="0" {{ $meal->gluten_free ? '' : 'selected="selected"' }}>No</option>
                                    <option value="1" {{ $meal->gluten_free ? 'selected="selected"' : '' }}>Yes</option>
                                </select>
                            </div>

							<div class="form-group">
                                <label for="vegetarian">Vegetarian</label>
                                <select class="form-control" name="vegetarian" id="vegetarian">
                                    <option value="0" {{ $meal->vegetarian ? '' : 'selected="selected"' }}>No</option>
                                    <option value="1" {{ $meal->vegetarian ? 'selected="selected"' : '' }}>Yes</option>
                                </select>
                            </div>

							<div class="form-group">
								<label for="is_full_width">Display Width</label>
								<select class="form-control" name="is_full_width" id="is_full_width">
									<option value="0" {{ $meal->is_full_width ? '' : 'selected="selected"' }}>Regular</option>
									<option value="1" {{ $meal->is_full_width ? 'selected="selected"' : '' }}>Large</option>
								</select>
							</div>

							<div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control" />
                            </div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary pull-right">Save</button>
							</div>

						</form>
					</div>

					<div class="col-md-6 col-md-offset-3" style="margin-top: 20px;">
						@if($meal->image)
							<img src="{{ $meal->image }}" class="img-responsive"/>
						@endif
					</div>

                </div>
            </div>
		</div>
	</div>

@endsection

@section('js')

@endsection
