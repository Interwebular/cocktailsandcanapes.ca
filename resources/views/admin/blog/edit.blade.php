@extends('layouts.app')

@section('htmlheader_title')
	{{ $post->title }}
@endsection

@section('main-content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
                <div class="box-header">
                    <i class="fa fa-pencil"></i>
                    <h3 class="box-title">{{ $post->title }}</h3>

                    <a href="{{ route('admin.blog.index') }}" class="btn btn-danger btn-xs pull-right">Cancel</a>
                </div>
                <div class="box-body pad table-responsive">
					<form action="{{ route('admin.blog.save', [$post]) }}" method="POST" enctype="multipart/form-data">
						{{ csrf_field() }}
                        {{ method_field('PUT') }}
					    <div class="col-md-8">
							<div class="form-group">
								<label for="title">Title</label>
								<input id="title" name="title" type="text" class="form-control" value="{{ old('title') ? old('title') : $post->title }}" />
							</div>

                            <div class="form-group">
                                <textarea id="post_content" name="content" class="form-control" style="height: 800px;">{{ old('content') ? old('content') : $post->content }}</textarea>
							</div>

					    </div>
                        <div class="col-md-4">

                            @if($post->image)
                                <img src="{{ $post->image }}" class="img-responsive" />
                                <hr />
                            @endif

                            <div class="form-group">
                                <label for="image">Change Image</label>
                                <input type="file" name="image"/>
                            </div>

                            <div class="form-group">
                                <label for="seo_description">SEO Description</label>
                                <textarea id="seo_description" name="seo_description" class="form-control" max="155">{{ old('seo_description') ? old('seo_description') : $post->seo_description }}</textarea>
                                <p class="help-block">A short description of the blog post. Max: 155 characters</p>
                            </div>

                            <div class="form-group">
                                <label for="seo_keywords">SEO Keywords</label>
                                <textarea id="seo_keywords" name="seo_keywords" class="form-control">{{ old('seo_keywords') ? old('seo_keywords') : $post->seo_keywords }}</textarea>
                                <p class="help-block">A comma separated list of keywords that are relevant to the blog post. Example: food, food preparation, cooking</p>
                            </div>

                            <div class="form-group">
                                <label for="public">Visibilty</label>
                                <select class="form-control" name="public" id="public">
                                    <option value="1" @if($post->public) selected="selected" @endif>Public</option>
                                    <option value="0" @if(!$post->public) selected="selected" @endif>Draft</option>
                                </select>
                            </div>

                            <div class="form-group">
								<label for="published_at">Published At</label>
								<input id="published_at" name="published_at" data-date-format="yyyy-mm-dd 00:00:00" type="text" class="form-control" value="{{ old('published_at') ? old('published_at') : $post->published_at }}" />
							</div>

							<div class="form-group">
								<button type="submit" class="btn btn-primary pull-right btn-block">Save</button>
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
        $('#published_at').datepicker();
    </script>
@endsection
