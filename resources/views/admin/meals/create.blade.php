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

                    <a href="{{ route('admin.menus.index') }}" class="btn btn-danger btn-xs pull-right">Cancel</a>
                </div>
                <div class="box-body pad table-responsive">

					<div class="col-md-6 col-md-offset-3">

						<form action="{{ route('admin.meals.store') }}" method="POST">

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
                                <label for="menu">Menu</label>
                                <select class="form-control" name="menu" id="menu">
                                    <option value="">-- Please Select --</option>
                                    @foreach($menus as $menu)
                                        <option value="{{ $menu->id }}" @if(old('menu') == $menu->id) selected="selected" @endif>{{ $menu->name }}</option>
                                    @endforeach
                                </select>
                            </div>

							<div class="form-group">
								<label for="category">Category</label>
								<select class="form-control" name="category" id="category">
									<option value="">-- Please Select --</option>
									@foreach($categories as $category)
										<option value="{{ $category->id }}" @if(old('category') == $category->id) selected="selected" @endif>{{ $category->name }}</option>
									@endforeach
								</select>
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
								<button type="submit" class="btn btn-primary pull-right">Create</button>
							</div>

						</form>
					</div>


                </div>
            </div>
		</div>
	</div>

@endsection
