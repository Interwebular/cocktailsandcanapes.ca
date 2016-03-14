@extends('layouts.app')

@section('htmlheader_title')
	Categories
@endsection

@section('main-content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-plus"></i>
                    <h3 class="box-title">Create Category</h3>

                    <a href="{{ route('admin.menus.show', [$menu]) }}" class="btn btn-info btn-xs pull-right">Back to Menu</a>
                </div>
                <div class="box-body pad table-responsive">

					<div class="col-md-6 col-md-offset-3">

						<form action="{{ route('admin.menus.categories.store', [$menu]) }}" method="POST">

							{{ csrf_field() }}

							<div class="form-group">
								<label for="name">Name</label>
								<input id="name" name="name" type="text" class="form-control" value="{{ old('name') }}" />
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
