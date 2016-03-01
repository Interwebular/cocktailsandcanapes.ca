<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;


class VenueController extends Controller
{


    public function index() {
        return view('venues.index', [
            'venues' => \App\Venue::paginate(25)
        ]);
    }

}
