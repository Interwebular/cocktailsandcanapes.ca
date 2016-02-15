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
                    <h3 class="box-title">{{ $meal->name }}</h3>

                    <a href="{{ route('admin.meals.index') }}" class="btn btn-danger btn-xs pull-right">Cancel</a>
                </div>
                <div class="box-body pad table-responsive">

					<div class="col-md-6 col-md-offset-3">

						<form action="{{ route('admin.meals.save', [$meal]) }}" method="POST">

							{{ csrf_field() }}
                            {{ method_field('PUT') }}

							<div class="form-group">
								<label for="name">Name</label>
								<input id="name" name="name" type="text" class="form-control" value="{{ old('name') ? old('name') : $meal->name }}" />
							</div>

                            <div class="form-group">
								<label for="description">Description</label>
                                <textarea id="description" name="description" class="form-control">{{ old('description') ? old('description') : $meal->description }}</textarea>
							</div>

                            <div class="form-group">
                                <label for="menu">Menu</label>
                                <select class="form-control" name="menu">
                                    <option value="">-- Please Select --</option>
                                    @foreach($menus as $menu)
                                        <option value="{{ $menu->id }}" @if($meal->menu_id == $menu->id) selected="selected" @endif>{{ $menu->name }}</option>
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
								<button type="submit" class="btn btn-primary pull-right">Save</button>
							</div>

						</form>
					</div>


                </div>
            </div>
		</div>
	</div>

@endsection
