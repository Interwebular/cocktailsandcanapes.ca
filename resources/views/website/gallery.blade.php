@extends('website.layout')

@section('body-classes')
padding dark
@endsection

@section('content')

    <style>
        .grid:after {
          content: '';
          display: block;
          clear: both;
        }

        .grid-sizer,
        .grid-item {
          width: 33.333%;
        }

        .grid-item {
          float: left;
        }

        .grid-item img {
          display: block;
          max-width: 100%;
        }
    </style>

    <section class="section-panel section-dark section-fluid-height" style="padding:0">
        <div class="grid">
            <div class="grid-sizer"></div>
            @foreach($images as $image)
                <div class="grid-item">
                    <img class="lazy" src="{{ $image->url }}" />
                </div>
            @endforeach
        </div>
    </section>

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/3.2.0/imagesloaded.pkgd.min.js"></script>
    <script>
        $(function(){
            var $grid = $('.grid').masonry({
                itemSelector: '.grid-item',
                percentPosition: true,
                columnWidth: '.grid-sizer',
            });

            $grid.imagesLoaded().progress( function() {
              $grid.masonry('layout');
            });
        });
    </script>

@endsection
