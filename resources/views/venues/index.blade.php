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
            <div class="row directory-items m-grid">
                @foreach($venues as $venue)
                    <div class="col-md-3 col-sm-6 col-xs-12 m-grid-item">
                        <a href="#" class="directory-item">
                            @if($venue->image)
                                <div class="directory-item-background" style="background-image:url(http://placehold.it/1000x500)"></div>
                            @endif
                            <div class="directory-item-details">
                                <h3>{{ $venue->name }}</h3>
                                <table>
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
                        </a>
                    </div>
                @endforeach
            </div>

            <div style="text-align:center;">
                {!! $venues->render() !!}
            </div>
        </div>
    </div>

@endsection
