@extends('layouts.app')

@section('htmlheader_title')
	Users
@endsection

@section('main-content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
                <div class="box-header">
                    {{-- <i class="fa fa-users"></i> --}}
                    <h3 class="box-title">Menus</h3>

                    <a href="{{ route('admin.menus.create') }}" class="btn btn-primary btn-xs pull-right"><i class="fa fa-plus"></i> Add</a>
                </div>
                <div class="box-body pad table-responsive">
                    <table class="table">
                        @foreach($menus as $menu)
                            <tr>
                                <td><a href="{{ route('admin.menus.edit', [$menu]) }}">{{ $menu->name }}</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
		</div>
	</div>

@endsection
