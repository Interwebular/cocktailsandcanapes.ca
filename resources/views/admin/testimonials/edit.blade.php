@extends('layouts.app')

@section('htmlheader_title')
	Edit Testimonial
@endsection

@section('main-content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-plus"></i>
                    <h3 class="box-title">Edit Testimonial</h3>

                    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-danger btn-xs pull-right">Cancel</a>
                </div>
                <div class="box-body pad table-responsive">

					<div class="col-md-8 col-md-offset-2">

						<form action="{{ route('admin.testimonials.save', [$testimonial]) }}" method="POST">

							{{ csrf_field() }}
                            {{ method_field('PUT') }}
							<div class="form-group">
								<label for="post_client">Client</label>
								<textarea name="client" id="post_client" class="form-control">{{ old('client') ? old('client') : $testimonial->client }}</textarea>
							</div>

							<div class="form-group">
								<label for="post_content">Testimonial</label>
								<textarea name="content" id="post_content" class="form-control">{{ old('content') ? old('content') : $testimonial->content }}</textarea>
							</div>

							<div class="form-group">
								<label for="type">Type</label>
								<select name="type" id="type" class="form-control">
									<option value="default" @if($testimonial->type == 'default') selected="selected" @endif>Default</option>
									<option value="wedding" @if($testimonial->type == 'wedding') selected="selected" @endif>Wedding</option>
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

@section('js')
    <script type="text/javascript">
        $('#post_client').wysihtml5();
        $('#post_content').wysihtml5();
    </script>
@endsection
