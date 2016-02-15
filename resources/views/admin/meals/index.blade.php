@extends('layouts.app')

@section('htmlheader_title')
	Meals
@endsection

@section('main-content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
                <div class="box-header">
                    {{-- <i class="fa fa-users"></i> --}}
                    <h3 class="box-title">Meals</h3>

                    <a href="{{ route('admin.meals.create') }}" class="btn btn-primary btn-xs pull-right"><i class="fa fa-plus"></i> Add</a>
                </div>
                <div class="box-body pad table-responsive">
                    <table class="table">
                        @foreach($meals as $meal)
                            <tr>
                                <td><a href="{{ route('admin.meals.edit', [$meal]) }}">{{ $meal->name }}</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
		</div>
	</div>

@endsection
