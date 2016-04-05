@extends('layouts.app')

@section('htmlheader_title')
	Edit Image
@endsection

@section('main-content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-plus"></i>
                    <h3 class="box-title">Image</h3>
                </div>
                <div class="box-body pad table-responsive">

					<div class="col-md-6 col-md-offset-3" style="margin-bottom: 20px;">
						<img src="{{ $image->url }}" class="img-responsive"/>
					</div>

					<div class="col-md-6 col-md-offset-3">

						<form action="{{ route('admin.gallery.save', [$image]) }}" method="POST" enctype="multipart/form-data">

							{{ csrf_field() }}
                            {{ method_field('PUT') }}

							<div class="form-group">
								<label for="sorting_order">Sorting Order</label>
								<input id="sorting_order" name="sorting_order" type="text" class="form-control" value="{{ old('sorting_order') ? old('sorting_order') : $image->sorting_order }}" />
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

@section('js')

@endsection
