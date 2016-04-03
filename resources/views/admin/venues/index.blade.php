@extends('layouts.app')

@section('htmlheader_title')
	Venues
@endsection

@section('main-content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
                <div class="box-header">
                    {{-- <i class="fa fa-users"></i> --}}
                    <h3 class="box-title">Venues</h3>

                    <a href="{{ route('admin.venues.create') }}" class="btn btn-primary btn-xs pull-right"><i class="fa fa-plus"></i> Add</a>
                </div>


				<div class="box-body pad table-responsive">
					<h2>Unverified</h2>
					<table class="table">
						@foreach($notVerifiedVenues as $venue)
							<tr>
								<td><a href="{{ route('admin.venues.edit', [$venue]) }}">{{ $venue->name }}</a></td>
							</tr>
						@endforeach
					</table>
				</div>

				<div class="box-body pad table-responsive">
					<h2>Featured</h2>
					<table class="table">
						@foreach($featuredVenues as $venue)
							<tr>
								<td><a href="{{ route('admin.venues.edit', [$venue]) }}">{{ $venue->name }}</a></td>
							</tr>
						@endforeach
					</table>
				</div>

                <div class="box-body pad table-responsive">
					<h2>All</h2>
                    <table class="table">
                        @foreach($venues as $venue)
                            <tr>
                                <td><a href="{{ route('admin.venues.edit', [$venue]) }}">{{ $venue->name }}</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
		</div>
	</div>

@endsection
