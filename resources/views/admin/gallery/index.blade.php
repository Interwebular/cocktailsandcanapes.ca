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
                    <table class="table">
                        @foreach($images as $image)
                            <tr>
                                <td>
									<a href="{{ $image->url }}" target="_blank">{{ $image->url }}</a>
								</td>
                                <td align="right">
                                    <form action="{{ route('admin.gallery.destroy', [$image]) }}" method="POST">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
