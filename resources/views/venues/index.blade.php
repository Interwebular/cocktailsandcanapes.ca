@extends('website.layout')

@section('body-classes')
dark padding
@endsection

@section('page-title') Venues @endsection
@section('meta-description') Description @endsection
@section('meta-keywords') Keywords @endsection

@section('content')

    <div class="directory-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="directory-header">Find the perfect venue</div>
                </div>
            </div>
        </div>
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 0">Featured Venues</h2>
                </div>
            </div>
            <div class="row directory-items m-grid">
                @foreach($featuredVenues as $venue)
                    @include('venues.venue', ['venue' => $venue])
                @endforeach
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2 style="margin-bottom: 0">All Venues</h2>
                </div>
            </div>
            <div class="row directory-items m-grid">
                @foreach($venues as $venue)
                    @include('venues.venue', ['venue' => $venue])
                @endforeach
            </div>

            <div style="text-align:center;">
                {!! $venues->render() !!}
            </div>
        </div>
    </div>

@endsection
