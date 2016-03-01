<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;


class PageController extends Controller
{


    public function weddings() {

        return view('website.wedding.index', [
            'venues' => \App\Venue::where('is_featured', 1)->take(3)->get()
        ]);
    }

}
