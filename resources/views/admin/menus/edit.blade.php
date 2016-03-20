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
                    <h3 class="box-title">{{ $menu->name }}</h3>

                    <a href="{{ route('admin.menus.index') }}" class="btn btn-info btn-xs pull-right">Back</a>
                </div>
                <div class="box-body pad table-responsive">

					<div class="col-md-6 col-md-offset-3">

						<form action="{{ route('admin.menus.save', [$menu]) }}" method="POST">

							{{ csrf_field() }}
                            {{ method_field('PUT') }}

							<div class="form-group">
								<label for="sorting_order">Sorting Order</label>
								<input id="sorting_order" name="sorting_order" type="text" class="form-control" value="{{ old('sorting_order') ? old('sorting_order') : $menu->sorting_order }}" />
							</div>

							<div class="form-group">
								<label for="name">Name</label>
								<input id="name" name="name" type="text" class="form-control" value="{{ old('name') ? old('name') : $menu->name }}" />
							</div>

							<div class="form-group">
								<label for="download_link">Download Link</label>
								<input id="download_link" name="download_link" type="text" class="form-control" value="{{ old('download_link') ? old('download_link') : $menu->download_link }}" />
							</div>

							<div class="form-group">
								<label for="pricing">Pricing</label>
								<textarea name="pricing" id="pricing" class="form-control">{{ old('pricing') ? old('pricing') : $menu->pricing }}</textarea>
							</div>

							<div class="form-group">
								<label for="description">Description</label>
								<textarea name="description" id="description" class="form-control">{{ old('description') ? old('description') : $menu->description }}</textarea>
							</div>

							<div class="form-group">
								<label for="is_coming_soon">Status</label>
								<select name="is_coming_soon" id="is_coming_soon" class="form-control">
									<option value="0" @if($menu->is_coming_soon == 0) selected="selected" @endif>Active</option>
									<option value="1" @if($menu->is_coming_soon == 1) selected="selected" @endif>Coming Soon</option>
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
