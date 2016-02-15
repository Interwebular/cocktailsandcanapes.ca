<?php

namespace App\Services\Menus;

use App\Menu;

class Menus {


    static function getAll() {
        return Menu::all();
    }
}
