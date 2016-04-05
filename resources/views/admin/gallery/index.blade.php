@extends('layouts.app')

@section('htmlheader_title')
	Gallery
@endsection

@section('main-content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Gallery</h3>
                    <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary btn-xs pull-right"><i class="fa fa-plus"></i> Upload</a>
                </div>
                <div class="box-body pad table-responsive">

                    <table class="table table-hover">
                        @foreach($images as $image)
                            <tr>
                                <td>
									<img src="{{ $image->url }}" width="250"/>
								</td>
								<td>
									Sorting Priority: {{ $image->sorting_order }}
								</td>
								<td align="right" width="80">
									<a class="btn btn-info btn-block" href="{{ route('admin.gallery.edit', [$image]) }}"><i class="fa fa-pencil"></i></a>
								</td>
                                <td align="right" width="80">
                                    <form action="{{ route('admin.gallery.destroy', [$image]) }}" method="POST">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger btn-block"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                    {!! $images->render() !!}
                </div>
            </div>
		</div>
	</div>

@endsection
