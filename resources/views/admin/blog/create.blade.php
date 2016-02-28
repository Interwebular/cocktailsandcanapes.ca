@extends('layouts.app')

@section('htmlheader_title')
	Write A Post
@endsection

@section('main-content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-plus"></i>
                    <h3 class="box-title">Write A Post</h3>

                    <a href="{{ route('admin.blog.index') }}" class="btn btn-danger btn-xs pull-right">Cancel</a>
                </div>
                <div class="box-body pad table-responsive">
					<form action="{{ route('admin.blog.store') }}" method="POST">
						{{ csrf_field() }}
					    <div class="col-md-8">
							<div class="form-group">
								<label for="title">Title</label>
								<input id="title" name="title" type="text" class="form-control" value="{{ old('title') }}" />
							</div>

                            <div class="form-group">
                                <textarea id="post_content" name="content" class="form-control" style="height: 800px;">{{ old('content') }}</textarea>
							</div>

					    </div>
                        <div class="col-md-4">

                            <div class="form-group">
                                <label for="image">Upload An Image</label>
                                <input type="file" />
                            </div>

                            <div class="form-group">
                                <label for="seo_description">SEO Description</label>
                                <textarea id="seo_description" name="seo_description" class="form-control" max="155">{{ old('seo_description') }}</textarea>
                                <p class="help-block">A short description of the blog post. Max: 155 characters</p>
                            </div>

                            <div class="form-group">
                                <label for="seo_keywords">SEO Keywords</label>
                                <textarea id="seo_keywords" name="seo_keywords" class="form-control">{{ old('seo_keywords') }}</textarea>
                                <p class="help-block">A comma separated list of keywords that are relevant to the blog post. Example: food, food preparation, cooking</p>
                            </div>

                            <div class="form-group">
                                <label for="public">Visibilty</label>
                                <select class="form-control" name="public" id="public">
                                    <option value="1">Public</option>
                                    <option value="0">Draft</option>
                                </select>
                            </div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary pull-right btn-block">Post</button>
							</div>
                        </div>
                    </form>
                </div>
            </div>
		</div>
	</div>

@endsection

@section('js')
    <script type="text/javascript">
        $('#post_content').wysihtml5();
    </script>
@endsection
