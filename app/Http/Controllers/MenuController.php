<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\Menu;
use PDF;

class MenuController extends Controller
{

    /**
     * Show the menu
     *
     * @return Response
     */
    public function show($menu = null) {

        $menu = $menu ? Menu::normal()->where('slug', $menu)->firstOrFail() : Menu::normal()->where('sorting_order', 1)->firstOrFail();

        return view('website.menus', [
            'menu' => $menu,
            'type' => 'default'
        ]);
    }

    /**
     * Show the wedding menu
     *
     * @return Response
     */
    public function showWedding($menu = null) {

        $menu = $menu ? Menu::wedding()->where('slug', $menu)->firstOrFail() : Menu::wedding()->where('sorting_order', 1)->firstOrFail();

        return view('website.menus', [
            'menu' => $menu,
            'type' => 'wedding'
        ]);
    }

    /**
     * Show the menu PDF
     *
     * @return Response
     */
    public function pdf($menu) {

        $menu = Menu::where('slug', $menu)->firstOrFail();


        // return view('pdf.menu', [
        //     'menu' => $menu
        // ]);

        $pdf = PDF::loadView('pdf.menu', [
            'menu' => $menu
        ]);

        return $pdf->stream();
    }

}
