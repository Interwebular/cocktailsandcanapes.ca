@extends('layouts.app')

@section('htmlheader_title')
	{{ $user->name }}
@endsection

@section('main-content')

	<div class="row">
		<div class="col-md-12">
			<div class="box box-primary">
                <div class="box-body pad table-responsive">

					<div class="col-md-6 col-md-offset-3">

						<form action="{{ route('admin.users.me.post') }}" method="POST">

							{{ csrf_field() }}

							<div class="form-group">
								<label for="name">Name</label>
								<input id="name" name="name" type="text" class="form-control" value="{{ old('name') ? old('name') : $user->name }}" />
							</div>

							<div class="form-group">
								<label for="email">Email</label>
								<input id="email" name="email" type="email" class="form-control" value="{{ old('email') ? old('email') : $user->email }}" />
							</div>

                            <div class="form-group">
								<label for="password">New Password</label>
								<input id="password" name="password" type="password" class="form-control" />
							</div>

                            <div class="form-group">
								<label for="password_confirmation">Confirm New Password</label>
								<input id="password_confirmation" name="password_confirmation" type="password" class="form-control" />
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
