@extends('layouts.app')

@section('htmlheader_title')
	Upload Image To the Gallery
@endsection

@section('main-content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-plus"></i>
                    <h3 class="box-title">Upload Image</h3>
                </div>
                <div class="box-body pad table-responsive">

					<div class="col-md-6 col-md-offset-3">
						<form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">

							{{ csrf_field() }}


							<div class="form-group">
								<label for="image">Upload An Image</label>
								<input type="file" name="image" class="form-control" />
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary pull-right">Upload</button>
							</div>

						</form>
					</div>


                </div>
            </div>
		</div>
	</div>

@endsection
