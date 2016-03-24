@extends('website.layout')

@section('body-classes')
    dark padding
@endsection

@section('page-title'){{ $venue->name }} | Find The Perfect Venue @endsection
@section('meta-description'){{ $venue->name }}@endsection

@section('content')
    <section class="section-panel section-white section-fluid-height venue-container" style="padding-top: 0px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if($venue->image)
                        <div class="venue-header" style="background-image:url({{ $venue->image }})">
                            <div class="venue-title">
                                {{ $venue->name }}
                            </div>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            @if(!$venue->image)
                                <h1>{{ $venue->name }}</h1>
                            @endif
                            <p class="venue-description">
                                @if($venue->description && $venue->description != '-')
                                    {!! nl2br(e($venue->description)) !!}
                                @endif
                            </p>


                            <table class="venue-table">
                                @if($venue->location)
                                    <tr>
                                        <td align="right"><b>Location</b></td>
                                        <td>{{ $venue->location }}</td>
                                    </tr>
                                @endif

                                @if($venue->rececption_count)
                                    <tr>
                                        <td align="right"><b>Reception</b></td>
                                        <td>{{ $venue->rececption_count }}</td>
                                    </tr>
                                @endif

                                @if($venue->dining_count)
                                    <tr>
                                        <td align="right"><b>Dining</b></td>
                                        <td>{{ $venue->dining_count }}</td>
                                    </tr>
                                @endif

                                @if($venue->website)
                                    <tr>
                                        <td align="right"><b>Website</b></td>
                                        <td><a href="{{ $venue->website }}" target="blank">Visit <i class="fa fa-external-link"></i></a></td>
                                    </tr>
                                @endif

                                @if($venue->phonenumber)
                                    <tr>
                                        <td align="right"><b>Phone Number</b></td>
                                        <td>{{ $venue->phonenumber }}</td>
                                    </tr>
                                @endif
                            </table>

                            <div style="text-align: center; margin-top: 30px;">
                                <div class="cta-wrapper">
                                    <a class="cta black" href="{{ route('venues.index') }}">&larr; Venues</a>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-md-offset-3" style="margin-top: 30px;">
                            <h1>Contact This Venue</h1>
                            <form action="{{ route('contact.submit') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="name">Name *</label>
                                    <input type="text" id="name" name="name" class="form-control input-lg" value="{{ old('name') }}" />
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" id="email" name="email" class="form-control input-lg" value="{{ old('email') }}" />
                                </div>
                                <div class="form-group">
                                    <label for="phone_number">Phone Number *</label>
                                    <input type="text" id="phone_number" name="phone_number" class="form-control input-lg" value="{{ old('phone_number') }}" />
                                </div>
                                <div class="form-group">
                                    <label for="message">Message *</label>
                                    <textarea name="message" id="message" class="form-control input-lg">{{ old('message') }}</textarea>
                                </div>
                                <div class="form-group">
                                    {!! Recaptcha::render() !!}
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="submit-btn btn btn-primary btn-lg pull-right">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

@section('js')

@endsection
