@extends('errors.template')

@section('content')
        <div class="container">
            <div class="col-md-6">
                <h1>404</h1>
            </div>
            <div class="col-md-6">
                <p>This page could not be found</p>
                <p><a href="{{ url('/') }}">Back to the Homepage</a></p>
            </div>
        </div>
@endsection
