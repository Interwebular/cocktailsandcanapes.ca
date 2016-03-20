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
                        <div class="venue-header" style="background-image:url({{ $venue->image }})"></div>
                    @endif

                    <div class="row">
                        <div class="col-md-6">
                            <h1>{{ $venue->name }}</h1>
                            <p>
                                {!! nl2br(e($venue->description)) !!}
                            </p>
                        </div>
                        <div class="col-md-6">

                            <table class="venue-table">
                                <tr>
                                    <td align="right"><b>Location</b></td>
                                    <td>{{ $venue->location }}</td>
                                </tr>

                                <tr>
                                    <td align="right"><b>Reception</b></td>
                                    <td>{{ $venue->rececption_count }}</td>
                                </tr>
                                <tr>
                                    <td align="right"><b>Dining</b></td>
                                    <td>{{ $venue->dining_count }}</td>
                                </tr>
                            </table>

                        </div>
                        <div class="col-md-6 col-md-offset-3" style="margin-top: 80px;">
                            <hr />
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
