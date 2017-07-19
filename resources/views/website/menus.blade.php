@extends('website.layout')

@section('page-title'){{ $menu->name }} | {{ $menu->meta_title }} | Cocktails And Canapes @endsection
@section('meta-description'){{ $menu->meta_description, 155 }}@endsection

@section('body-classes')
    dark padding
@endsection

@section('content')

    <section class="menu section-panel">
        <div class="container-fluid menu-container">
            <div class="menu-button-container">
                {!! \App\Services\Menus\Menus::renderMenuNav($type, $menu) !!}
            </div>

            <header class="menu-header">
                {{ $menu->name }}

                <a href="{{ $menu->download_link ? $menu->download_link : route('menus.pdf', [$menu->slug]) }}" target="_blank">Download Menu <i class="fa fa-file-pdf-o"></i></a>

                @if($menu->pricing)
                    <div class="price">{!! nl2br(e($menu->pricing)) !!}</div>
                @endif

                @if($menu->description)
                    <div class="description">{!! nl2br(e($menu->description)) !!}</div>
                @endif
            </header>
            <div class="row">
                <div class="col-md-12" style="padding-bottom: 15px;">
                    @foreach($menu->categories as $category)
                        <div class="row">
                            <div class="col-xs-12">
                                <h1 class="menu-category">{{$category->name}}</h1>
                            </div>
                        </div>
                        <div class="row m-grid">
                            @foreach($category->meals()->orderBy('sorting_order', 'ASC')->get() as $meal)
                                @if($meal->category_id)
                                    <div class="col-xs-12 {{ $meal->is_full_width ? '' : 'col-sm-6 col-md-4' }} m-grid-item">
                                        <a href="#" class="menu-item update-menu-item-image no-image" onClick="return false;">
                                            <h3 style="margin-bottom: 10px;">{{ $meal->name }} @if($meal->gluten_free) <span class="badge badge-default">GF</span> @endif @if($meal->vegetarian) <span class="badge badge-default">V</span> @endif</h3>
                                            <p>{!! preg_replace('/\*\*(.+?)\*\*/s', '<strong>$1</strong>', nl2br(e($meal->description))) !!}</p>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endforeach

                    <hr />

                    <div class="row m-grid">
                        @foreach($menu->meals()->orderBy('sorting_order', 'ASC')->get() as $meal)
                            @if(!$meal->category_id)
                                <div class="col-xs-12 {{ $meal->is_full_width ? '' : 'col-sm-6 col-md-4' }} m-grid-item">
                                    <a href="#" class="menu-item update-menu-item-image no-image" onClick="return false;">
                                        <h3 style="margin-bottom: 10px;">{{ $meal->name }} @if($meal->gluten_free) <span class="badge badge-default">GF</span> @endif @if($meal->vegetarian) <span class="badge badge-default">V</span> @endif</h3>
                                        <p>{!! preg_replace('/\*\*(.+?)\*\*/s', '<strong>$1</strong>', nl2br(e($meal->description))) !!}</p>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>

                    <hr />

                    <div class="row">
                        <div class="col-xs-12">
                            <table>
                                <tr>
                                    <td width="45"><span class="badge badge-default meal-bagde ">GF</span></td>
                                    <td>Gluten Free</td>
                                </tr>
                                <tr>
                                    <td width="45"><span class="badge badge-default meal-bagde ">V</span></td>
                                    <td>Vegetarian</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-4 menu-item-image-width-holder"></div> --}}
            </div>
        </div>
        <div class="bottom-of-menu"></div>
    </section>

    @if($menu->slug === 'hot-canapes' OR $menu->slug === 'cold-canapes' OR $menu->slug === 'plated-dinner-fine')
    <div style="padding: 20px;" class="hidden-xs hidden-sm">
        <section class="section-panel panel-75  hidden-xs hidden-sm">
            <div class="menu-preview-content-container">
                <button class="left left-2 "><i class="fa fa-arrow-circle-o-left"></i></button>
                <button class="right right-2 "><i class="fa fa-arrow-circle-o-right"></i></button>
                <div class="menu-preview-content">
                    <div class="menu-content-preview-slider menu-content-preview-slider-2">
                        @foreach($menu->meals()->whereNotNull('image')->get() as $meal)
                            <?php
                                $meal->name = str_replace('(Plus $5)', '', $meal->name);
                                $meal->name = str_replace('(plus $5)', '', $meal->name);
                                $meal->name = str_replace('(PLUS $5)', '', $meal->name);
                            ?>
                            <div>
                                <h1>{{ $meal->name }}</h1>
                                <p>{{ $meal->description }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="menu-preview-image-container">

                <div class="menu-image-preview-slider menu-image-preview-slider-2">
                    @foreach($menu->meals()->whereNotNull('image')->get() as $meal)
                        <div style="background-image:url({{ $meal->image }})"></div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
    @endif

@endsection

@section('js')

    <script>

        $('.coming-soon').click(function() {
            return false;
        });

    </script>

@endsection
