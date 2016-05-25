@extends('website.layout')

@section('body-classes')
dark
@endsection

@section('page-title') The OFFICIAL CATERING COMPANY OF 8TH ANNUAL DEIGHTON CUP @endsection

@section('content')

    <div class="bgimage" style="background-image:url({{ asset('img/deighton/bg.jpg') }}); display:block;"></div>

    <section class="section-panel section-fluid-height" style="padding: 270px 0;">
        <div class="content-center">
            <img src="{{ asset('img/deighton/deighton-cup-white.png') }}" style="width:150px;display:inline-block;margin-bottom:30px;" />

            <h1 class="wedding-title">
                The official catering company of 8th annual <b>DEIGHTON CUP</b>
            </h1>

            <div class="spacer" style="background: #fff;"></div>
            <div class="clients">
                    <div class="client" style="color: #fff;">
                        <div class="quote quote__justified">
                            This year, East meets West in the Deighton Cup's menu. The event’s traditional Deep South-inspired food program will incorporate subtle and fiery Pacific Rim flavours for a tantalizing array of complimentary and à la carte creations that embody both the Deighton Cup’s heritage and the spirit of the West Coast.
                        </div>
                    </div>
            </div>
        </div>
    </section>



    <section class="section-panel panel-75  hidden-xs hidden-sm">
        <div class="menu-preview-content-container">
            <button class="left left-2 "><i class="fa fa-arrow-circle-o-left"></i></button>
            <button class="right right-2 "><i class="fa fa-arrow-circle-o-right"></i></button>
            <h1 class="menu-preview-title">
                Main Lunch
                <small>Complimentary With Ticket Purchase</small>
            </h1>
            <div class="menu-preview-content">
                <div class="menu-content-preview-slider menu-content-preview-slider-2">
                    <div>
                        <h1>Smoked Bo Ssam Beef Brisket Sandwich</h1>
                        <p>
                            Texas Style '63 Acres' Smoked Beef Brisket, Pickled Zucchini, Black Kale, Sesame Ginger BBQ Glaze, Ssam Sauce on a Crusty Bap Bun
                            <br><br>
                            <small>
                                Comes with Vietnamese Style Slaw and Confit Pemberton Potato Salad
                            </small>
                        </p>
                    </div>

                    <div>
                        <h1>Korean BBQ Shrimp on Grits</h1>
                        <p>
                            Korean BBQ 'Oceanwise' Shrimp, White Corn Grits, Sunflower Sprout Salad, Fried Onions, Red Chilies, Green Onion
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-preview-image-container">
            <div class="menu-image-preview-slider menu-image-preview-slider-2">
                <div style="background-image:url({{ asset('img/deighton/brisket.jpg') }})"></div>
                <div style="background-image:url({{ asset('img/deighton/shrimps.jpg') }})"></div>
            </div>
        </div>
    </section>

    <section class="section-panel panel-75 hidden-xs hidden-sm">
        <div class="menu-preview-image-container">
            <div class="menu-image-preview-slider menu-image-preview-slider-1">
                <div style="background-image:url({{ asset('img/deighton/fries.jpg') }})"></div>
                <div style="background-image:url({{ asset('img/deighton/popcorn.jpg') }})"></div>
                <div style="background-image:url({{ asset('img/deighton/waffle.jpg') }})"></div>
            </div>
        </div>
        <div class="menu-preview-content-container">
            <button class="left left-1"><i class="fa fa-arrow-circle-o-left"></i></button>
            <button class="right right-1"><i class="fa fa-arrow-circle-o-right"></i></button>

            <h1 class="menu-preview-title">
                Stations
                <small>$7</small>
            </h1>

            <div class="menu-preview-content">
                <div class="menu-content-preview-slider menu-content-preview-slider-1">
                    <div>
                        <h1>Pickled French Fry Cone</h1>
                        <p>Pickled Russet Potatoes, Sriracha Mayo, 5 Spice Hoi Sin, Green Onion, Fried Shallots, Green Onion & Garlic Sauce, Sesame seeds</p>
                    </div>
                    <div>
                        <h1>Popcorn Chicken Cones</h1>
                        <p>Juicy Fried Buttermilk Chicken, Ginger-Sweet Soy Sauce, Fresh Watermelon</p>
                    </div>
                    <div>
                        <h1>Fried Chicken Waffle Taco</h1>
                        <p>Buttermilk Waffle, Fried Chicken, Maple Mayonnaise, Maple Syrup, Vietnamese Slaw</p>
                    </div>
                </div>
            </div>

        </div>
    </section>



@endsection

@section('js')
    <script>

        $('a[href*=\\#]:not([href=\\#])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });

    </script>


@endsection
