@extends('website.layout')

@section('body-classes')
dark
@endsection

@section('page-title') Weddings @endsection
@section('meta-description') Description @endsection
@section('meta-keywords') Keywords @endsection

@section('content')
        <section class="section-panel section-fluid-height">
            <div class="container">
                <div class="col-md-12 panel-content">
                    <p>
                        <h3>Goodbye, rubber chicken dinner</h3>
                    </p>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://player.vimeo.com/video/123019144" class="embed-responsive-item" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </div>

                    <div style="margin: 50px 0; text-align: center;">
                        <div class="cta-wrapper" >
                            <a class="cta" href="{{ route('menus.show') }}">Catering Menu</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-panel section-fluid-height" style="background: #fff; padding-left: 20px; padding-right: 20px;">
            <div class="content-center">
                <p class="default">
                    Your guests arrive; anticipation of the celebration is building. They indulge in fine foods, scintillating cocktails, and pleasurable company. This sense of comfort and positive energy is subconscious to the crowd, yet each detail has been meticulously crafted to create an extraordinary event. Whether you desire an elegant formal sit down dinner, a family style dinning experience, or a cocktail soiree, we create a distinct social and culinary experience that will leave your guests buzzing. Say goodbye to the rubber chicken dinner.</p>
                <div class="cta-wrapper">
                    <a class="cta black" href="{{ route('contact.index') }}">Contact Us</a>
                </div>
            </div>
        </section>

    <div class="directory-wrapper dark">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="directory-header dark">Find the perfect venue</div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row directory-items">
                @foreach($venues as $venue)
                    <div class="col-md-4">
                        <a href="#" class="directory-item">
                            @if($venue->image)
                                <div class="directory-item-background" style="background-image:url({{ $venue->image }})"></div>
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

            <div style="text-align:center; padding-top: 10px; padding-bottom: 60px;">
                <div class="cta-wrapper">
                    <a class="cta" href="{{ route('venues.index') }}">See All Venues</a>
                </div>
            </div>
        </div>
    </div>

@endsection
