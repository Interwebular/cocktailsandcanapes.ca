@extends('website.layout')

@section('body-classes')
    dark padding
@endsection

@section('content')
    <section class="menu">
        <div class="container-fluid menu-container">
            <ul class="menu-buttons">
                @foreach(\App\Services\Menus\Menus::getAll() as $nav)
                    <li style="width: {{ 100 / count(\App\Services\Menus\Menus::getAll()) }}%;">
                        <a href="{{ route('menus.show', $nav->slug) }}" class="{{ $menu->slug == $nav->slug ? 'active' : '' }}">{{ $nav->name }}</a>
                    </li>
                @endforeach
            </ul>
            <header class="menu-header">
                {{ $menu->name }}

                <a href="{{ $menu->download_link ? $menu->download_link : route('menus.pdf', [$menu->slug]) }}" data-toggle="tooltip" data-placement="right" title="Download The {{ $menu->name }} Menu" target="_blank"><i class="fa fa-file-pdf-o"></i></a>

                @if($menu->pricing)
                    <div class="price">{!! nl2br(e($menu->pricing)) !!}</div>
                @endif
            </header>
            <div class="row">
                <div class="col-md-8" style="padding-bottom: 15px;">
                    <div class="row m-grid">
                        @foreach($menu->meals as $meal)
                            @if(!$meal->category_id)
                                <div class="col-xs-12 col-sm-6 col-md-4 m-grid-item">
                                    <a href="#" class="menu-item update-menu-item-image" data-image="{{ $meal->image }}">
                                        <h3 style="margin-bottom: 10px;">{{ $meal->name }} @if($meal->gluten_free) <span class="badge badge-default">GF</span> @endif @if($meal->vegetarian) <span class="badge badge-default">V</span> @endif</h3>
                                        <p>{!! nl2br(e($meal->description)) !!}</p>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    @foreach($menu->categories as $category)
                        <div class="row">
                            <div class="col-xs-12">
                                <h1 class="menu-category">{{$category->name}}</h1>
                            </div>
                        </div>
                        <div class="row m-grid">
                            @foreach($category->meals as $meal)
                                @if($meal->category_id)
                                    <div class="col-xs-12 col-sm-6 col-md-4 m-grid-item">
                                        <a href="#" class="menu-item update-menu-item-image" data-image="{{ $meal->image }}">
                                            <h3 style="margin-bottom: 10px;">{{ $meal->name }} @if($meal->gluten_free) <span class="badge badge-default">GF</span> @endif @if($meal->vegetarian) <span class="badge badge-default">V</span> @endif</h3>
                                            <p>{!! nl2br(e($meal->description)) !!}</p>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endforeach

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
                <div class="menu-item-image hidden-sm hidden-xs"></div>
            </div>
        </div>
    </section>
@endsection

@section('js')

    <script>

        // $(function(){
        //     var firstItem = $($('.menu-item')[0]),
        //         imageUrl = firstItem.data('image');
        //
        //     firstItem.addClass('active');
        //     $('.menu-item-image').css('background-image', 'url(' + imageUrl + ')');
        // });

        $('.update-menu-item-image').click(function(e){

            var $this = $(this),
                imageUrl = $this.data('image');

            $('.update-menu-item-image').removeClass('active');

            $this.addClass('active');

            $('.menu-item-image').css('background-image', 'url(' + imageUrl + ')');
            e.preventDefault();
        });

    </script>

@endsection
