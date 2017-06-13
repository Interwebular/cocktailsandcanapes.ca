@extends('website.layout')

@section('body-classes')
dark padding
@endsection

@section('meta-description') We have partnered with some of the best event spaces in Vancouver, Squamish and beyond. The team at Cocktails & Canapes strives to ensure that you find the perfect venue for your event. @endsection
@section('page-title') Vancouver Event Spaces | Cocktails & Canapes Catering @endsection

@section('content')

    <section class="section-panel section-header section-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="heading" style="text-align: center;">
                        Find the perfect venue
                    </h1>

                </div>
            </div>
        </div>
        <div class="spacer" style="background: #fff; margin-top: 15px;"></div>

        <div class="content-center" style="margin-top: 30px; margin-left: auto; margin-right: auto; max-width: 650px;">
            <p class="default" style="color: white;">
                Cocktails and Canapes are proud to have established a fantastic working relationship with a wide variety of Vancouver venues. Whether you’re looking for a small venue for an intimate wedding, or a large space for a corporate function, we can help you find the space that’s the right fit for you. 
                <br>
                Browse our listed venues and feel free to get in touch if you have any questions about the spaces listed. We’re more than happy to help. 
            </p>
            <h1 class="heading" style="margin-left:auto; margin-right: auto; width: 200px;">
                
                <a href="{{ route('venues.submit') }}" class="boxcta pull-right" style="font-size: 0.4em;">
                    Add Your Venue
                </a>
            </h1>
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
