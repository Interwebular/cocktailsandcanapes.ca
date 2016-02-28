@extends('layouts.app')

@section('htmlheader_title')
	Blog
@endsection

@section('main-content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
                <div class="box-header">
                    {{-- <i class="fa fa-users"></i> --}}
                    <h3 class="box-title">Blog</h3>

                    <a href="{{ route('admin.blog.create') }}" class="btn btn-primary btn-xs pull-right"><i class="fa fa-plus"></i> Add</a>
                </div>
                <div class="box-body pad table-responsive">
                    <table class="table">
                        @foreach($posts as $post)
                            <tr>
                                <td>
									@if($post->public)
										<span class="label label-success">Public</span>
									@else
										<span class="label label-default">Draft</span>
									@endif

									<a href="{{ route('admin.blog.edit', [$post]) }}">{{ $post->title }}</a>
								</td>
                            </tr>
                        @endforeach
                    </table>

                    {!! $posts->render() !!}
                </div>
            </div>
		</div>
	</div>

@endsection
