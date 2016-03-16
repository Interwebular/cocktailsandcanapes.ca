<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Menu;
use PDF;

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

    /**
     * Show the menu PDF
     *
     * @return Response
     */
    public function pdf($menu) {

        $menu = Menu::where('slug', $menu)->firstOrFail();

        $pdf = PDF::loadView('pdf.menu', [
            'menu' => $menu
        ]);

        return $pdf->stream();
    }

}
