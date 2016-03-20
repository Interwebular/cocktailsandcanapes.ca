@extends('layouts.app')

@section('htmlheader_title')
	Users
@endsection

@section('main-content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Menus</h3>
                </div>
                <div class="box-body pad table-responsive">
                    <table class="table">
                        @foreach($menus as $menu)
                            <tr>
								<td>{{ $menu->sorting_order }}</td>
                                <td><a href="{{ route('admin.menus.show', [$menu]) }}">{{ $menu->name }}</a></td>
                                <td><a class="btn btn-info btn-xs pull-right" href="{{ route('admin.menus.edit', [$menu]) }}"><i class="fa fa-pencil"></i></a></td>
                            </tr>
                        @endforeach
                    </table>
					<a href="{{ route('admin.menus.create') }}" class="btn btn-primary">Create</a>
                </div>
            </div>
		</div>
	</div>

@endsection
