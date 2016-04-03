<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>{{ $menu->name }}</title>
        <style>

            /*@font-face {
                font-family: 'Bitter';
                src: url('{{storage_path()}}/fonts/Bitter.ttf')  format('truetype')
            }

            @font-face {
                font-family: 'Bitter-Bold';
                src: url('{{storage_path()}}/fonts/Bitter-Bold.ttf')  format('truetype')
            }*/

            html {
                padding: 0;
                margin: 40px;
                background: #f5f5f5;
            }

            body { font-family: 'bitter', Helvetica; color: #111; padding-top: 160px;}
            .page-break { page-break-after: always; }
            h1,h2,h3,h4,h5,h6 { margin: 0; padding: 0;  }
            .cf {
                clear: both;
            }

            .header {
                top: 0;
                position: fixed;
                margin-bottom: 30px;
            }
            .header__title {
                font-family: 'bitter';
                font-size: 1.8em;
                font-weight: bold;
                margin-bottom: 0px;
                margin-top: 20px;
            }
            .header__pricing {
                font-family: 'bitter';
                font-size: 0.7em;
                line-height: 1.2em;
            }
            .header__logo {
                position: absolute;
                top: 0;
                right: 0;
                display: inline-block;
            }
            .header__logo__image {
                width: 160px;
            }

            .footer {
                bottom: 0;
                position: fixed;
                font-size: 0.7em;
                text-align: center;
            }




            .menu {
                /*margin-top: 200px;*/
            }
            .menu__category {
                font-family: 'Bitter-Bold';
                font-size: 1.2em;
                font-weight: bold;
                margin-bottom: 5px;
                margin-top: 50px;
            }
            .menu__item {
                width: 250px;
                padding: 13px 0;
                width: 45%;
            }

            .menu__item--even {
                float: left;
            }

            .menu__item--odd {
                float: left;
                margin-right: 30px;
            }

            .menu__item--is_full_width {
                width: 90%;
                float: none;
            }

            .menu__item__name {
                font-family: 'Bitter-Bold';
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

        <?php $letterCount = 0; ?>

        <?php $start = 1;  ?>
        @foreach($menu->meals as $meal)
            @if(!$meal->category_id)
                <?php
                    $letterCount += strlen(e($meal->description));
                ?>
                <div class="menu__item <?php if($start % 2 == 0) echo "menu__item--even"; else echo "menu__item--odd"; ?> <?php if($meal->is_full_width) echo 'menu__item--is_full_width'; ?>">
                    <div class="menu__item__name">
                        {{ $meal->name }}
                        @if($meal->gluten_free) GF @endif
                        @if($meal->vegetarian) V @endif
                    </div>

                    <div class="menu__item__description">
                        {!! nl2br(e($meal->description)) !!}
                    </div>
                </div>
                <?php
                    if($start % 2 == 0) {
                        echo '<div class="cf"></div>';
                    }

                    $start++;

                    if($letterCount >= 1100) {
                        $letterCount = 0;
                        echo "<div class=\"page-break\"></div>";
                    }
                ?>
            @endif
        @endforeach

        @foreach($menu->categories as $category)

            <div style="height: 5px; width: 100%"></div>
            <div class="menu__category">{{ $category->name }}</div>

            <?php $start = 1;  ?>
            @foreach($category->meals as $meal)
                @if($meal->category_id)
                    <?php
                        $letterCount += strlen(e($meal->description));

                        if($meal->is_full_width) {
                            $letterCount = ($letterCount * 1.1);
                        }
                    ?>
                    <div class="menu__item <?php if($start % 2 == 0) echo "menu__item--even"; else echo "menu__item--odd"; ?> <?php if($meal->is_full_width) echo 'menu__item--is_full_width'; ?>">
                        <div class="menu__item__name">
                            {{ $meal->name }}
                            @if($meal->gluten_free) GF @endif
                            @if($meal->vegetarian) V @endif
                        </div>

                        <div class="menu__item__description">
                            {!! nl2br(e($meal->description)) !!}
                        </div>
                    </div>
                    <?php
                        if($start % 2 == 0) {
                            echo '<div class="cf"></div>';
                        }

                        $start++;

                        if($letterCount >= 1100) {
                            $letterCount = 0;
                            echo "<div class=\"page-break\"></div>";
                        }
                    ?>
                @endif
            @endforeach
        @endforeach

        <div class="footer">
            #150 - 351 Abbott Street PO Box 98882 Vancouver, BC V6B 0M4 | 604-728-5937 | info@cocktailsandcanapes.ca
        </div>

    </body>
</html>
