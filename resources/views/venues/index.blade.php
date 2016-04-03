@extends('website.layout')

@section('body-classes')
dark padding
@endsection

@section('page-title') Venues @endsection
@section('meta-description') Description @endsection
@section('meta-keywords') Keywords @endsection

@section('content')

    <section class="section-panel section-header section-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="heading">
                        Find the perfect venue

                        <a href="{{ route('venues.submit') }}" class="btn btn-primary pull-right">
                            Add Your Venue
                        </a>
                    </h1>
                </div>
            </div>
        </div>
    </section>


    <div class="directory-wrapper" style="background: #f9f9f9;">

        {{-- <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="directory-header"></div>
                </div>
            </div>
        </div> --}}

        <div class="container" style="padding-top: 30px;">

            @if($featuredVenues)
                <div class="row">
                    <div class="col-md-12">
                        <h4 style="margin-bottom: 0; font-weight: 300; text-transform: uppercase;">Featured Venues</h4>
                    </div>
                </div>
                <div class="row directory-items m-grid">
                    @foreach($featuredVenues as $venue)
                        @include('venues.venue', ['venue' => $venue, 'columnsClass' => 'col-md-4'])
                    @endforeach
                </div>
            @endif


            @if($featuredVenues)
                <div class="row">
                    <div class="col-md-12">
                        <h4 style="margin-bottom: 0; font-weight: 300; text-transform: uppercase;">All Venues</h4>
                    </div>
                </div>
            @endif
            <div class="row directory-items m-grid">
                @foreach($venues as $venue)
                    @include('venues.venue', ['venue' => $venue, 'columnsClass' => 'col-md-4'])
                @endforeach
            </div>

            <div style="text-align:center;">
                {!! $venues->render() !!}
            </div>
        </div>
    </div>

@endsection
