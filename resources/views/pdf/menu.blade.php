<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>{{ $menu->name }}</title>
        <style>

            html {
                padding: 0;
                margin: 50px;
                background: #f5f5f5;
            }

            body { font-family: Helvetica; color: #111; }
            .page-break { page-break-after: always; }
            h1,h2,h3,h4,h5,h6 { margin: 0; padding: 0; }

            .header {
                position: relative;
                margin-bottom: 30px;
            }
            .header__title {
                font-size: 1.8em;
                font-weight: bold;
                margin-bottom: 15px;
                margin-top: 45px;
            }
            .header__pricing {
                font-size: 0.7em;
                line-height: 1.5em;
            }
            .header__logo {
                position: absolute;
                top: 0;
                right: 0;
                display: inline-block;
            }
            .header__logo__image {
                width: 200px;
            }

            .menu {}
            .menu__category {
                font-size: 1.5em;
                font-weight: bold;
                margin-bottom: 15px;
                margin-top: 25px;
            }
            .menu__item {
                width: 250px;
                margin-bottom: 20px;
            }
            .menu__item__name {
                font-size: 0.9em;
                font-weight: bold;
                margin-bottom: 3px;
            }
            .menu__item__description {
                font-size: 0.7em;
            }

        </style>
    </head>
	<body>

        <div class="header">
            <div class="header__title">{{ $menu->name }}</div>
            <div class="header__pricing">{!! nl2br(e($menu->pricing)) !!}</div>

            <div class="header__logo">
                <img class="header__logo__image" src="http://s3.amazonaws.com/cdn.cocktailsandcanapes.ca/static/logos/logo_full.png" />
            </div>
        </div>

        <div class="menu">
            {{-- @foreach($menu->meals as $meal)
                @if(!$meal->category_id)

                    <h3 style="margin-bottom: 10px;">{{ $meal->name }} @if($meal->gluten_free) <span class="badge badge-default">GF</span> @endif @if($meal->vegetarian) <span class="badge badge-default">V</span> @endif</h3>
                    <p>{!! nl2br(e($meal->description)) !!}</p>

                @endif
            @endforeach --}}

            @foreach($menu->categories as $category)

                <div class="menu__category">{{ $category->name }}</div>


                @foreach($category->meals as $meal)
                    <div class="menu__item">
                        @if($meal->category_id)
                            <div class="menu__item__name">
                                {{ $meal->name }}
                                @if($meal->gluten_free) GF @endif
                                @if($meal->vegetarian) V @endif
                            </div>

                            <div class="menu__item__description">
                                {!! nl2br(e($meal->description)) !!}
                            </div>
                        @endif
                    </div>
                @endforeach

            @endforeach
        </div>







    </body>
</html>
