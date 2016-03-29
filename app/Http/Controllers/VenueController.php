<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;


class VenueController extends Controller
{


    public function index() {
        return view('venues.index', [
            'featuredVenues' => \App\Venue::featured()->get(),
            'venues' => \App\Venue::paginate(25)
        ]);
    }

    public function show(\App\Venue $venue) {

        return view('venues.show', [
            'venue' => $venue
        ]);
    }

}
