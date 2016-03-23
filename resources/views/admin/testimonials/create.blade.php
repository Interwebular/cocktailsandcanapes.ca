@extends('layouts.app')

@section('htmlheader_title')
	Add Testimonial
@endsection

@section('main-content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-plus"></i>
                    <h3 class="box-title">Add Testimonial</h3>

                    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-danger btn-xs pull-right">Cancel</a>
                </div>
                <div class="box-body pad table-responsive">

					<div class="col-md-8 col-md-offset-2">

						<form action="{{ route('admin.testimonials.store') }}" method="POST">

							{{ csrf_field() }}

							<div class="form-group">
								<label for="post_client">Client</label>
								<textarea name="client" id="post_client" class="form-control">{{ old('client') }}</textarea>
							</div>

							<div class="form-group">
								<label for="post_content">Testimonial</label>
								<textarea name="content" id="post_content" class="form-control">{{ old('content') }}</textarea>
							</div>

							<div class="form-group">
								<label for="type">Type</label>
								<select name="type" id="type" class="form-control">
									<option value="default">Default</option>
									<option value="wedding">Wedding</option>
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

@section('js')
    <script type="text/javascript">
        $('#post_client').wysihtml5();
        $('#post_content').wysihtml5();
    </script>
@endsection
