<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Menu;

class MenuController extends Controller
{

    /**
     * Show the menu
     *
     * @return Response
     */
    public function show($menu = 'canapes') {

        $menu = Menu::where('slug', $menu)->firstOrFail();

        return view('website.menus', [
            'menu' => $menu
        ]);
    }

}
