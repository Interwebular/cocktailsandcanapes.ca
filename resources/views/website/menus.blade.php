@extends('website.layout')

@section('body-classes')
    dark padding
@endsection

@section('content')
    <div class="menu-item-image hidden-sm hidden-xs">
        <a href="mailto:info@cocktailsandcanapes.ca">
            Request A Quote
        </a>
    </div>

    <section class="menu">
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
                <div class="col-md-8" style="padding-bottom: 15px;">
                    <div class="row m-grid">
                        @foreach($menu->meals as $meal)
                            @if(!$meal->category_id)
                                <div class="col-xs-12 col-sm-6 col-md-4 m-grid-item">
                                    <a href="#" class="menu-item update-menu-item-image @if(!$meal->image) no-image @endif" data-image="{{ $meal->image }}">
                                        @if($meal->image)
                                            <i class="menu-item--has-image fa fa-image"></i>
                                        @endif
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
                                        <a href="#" class="menu-item update-menu-item-image @if(!$meal->image) no-image @endif" data-image="{{ $meal->image }}">
                                            @if($meal->image)
                                                <i class="menu-item--has-image fa fa-image"></i>
                                            @endif
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
                <div class="col-md-4 menu-item-image-width-holder"></div>
            </div>
        </div>
        <div class="bottom-of-menu"></div>
    </section>

@endsection

@section('js')

    <script>

        $(function(){
            var firstItem = $($("[data-image!=''][data-image]")[0]),
                imageUrl = firstItem.data('image');

            firstItem.addClass('active');
            $('.menu-item-image').css('background-image', 'url(' + imageUrl + ')');
        });


        var totalHeightCached;
        var totalImageWidth;

        $(function(){

            var firstItem = $($('.menu-item')[0]);
            $('.menu-item-image').css('top', firstItem.offset().top + 'px');
            $('.menu-item-image').css('width', $('.menu-item-image-width-holder').width() + 'px');

            //
            // var buttonContainerHeight = $('.menu-button-container').height() + 20;
            // var menuHeaderHeight = $('.menu-header').height() + 50;
            // var categoryTitleHeight = 70;
            // var totalHeight = menuHeaderHeight + categoryTitleHeight + buttonContainerHeight;
            // totalHeightCached = totalHeight;
            //
            // //$('.menu-item-image').css('top', totalHeight + 'px');
            // totalImageWidth = $('.menu-item-image').width();
        });

        $(window).scroll(function() {

            var offsiteHeight = 196;
            var heightOfBottom = $('.bottom-of-menu').offset().top;
            var firstItem = $($('.menu-item')[0]);
            var heightOfFirstItem = firstItem.offset().top;
            var heightOfScroll = $(window).scrollTop() + offsiteHeight;
            var heightOfImageBottom = $('.menu-item-image').offset().top + $('.menu-item-image').height();

            if(heightOfFirstItem <= heightOfScroll) {

                $('.menu-item-image').css({
                    position: 'fixed',
                    top: offsiteHeight + 'px'
                });

            }
            else {
                $('.menu-item-image').css({
                    position: 'absolute',
                    top: heightOfFirstItem + 'px'
                });
            }
        });

        $(window).resize(function(){
            $('.menu-item-image').width( $('.menu-item-image-width-holder').width() + 'px' );
        });


        $('.update-menu-item-image').click(function(e){

            var $this = $(this),
                imageUrl = $this.data('image');

            if($this.hasClass('no-image')) {
                return false;
            }

            $('.update-menu-item-image').removeClass('active');

            $this.addClass('active');

            $('.menu-item-image').css('background-image', 'url(' + imageUrl + ')');
            e.preventDefault();
        });

        $('.coming-soon').click(function() {
            return false;
        });

    </script>

@endsection
