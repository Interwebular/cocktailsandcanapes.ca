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


    public function googleApi($keyword = 'venue') {

        // Near By
        // https://developers.google.com/places/web-service/search#PlaceSearchRequests
        //$url = 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=49.246292,-123.116226&radius=5000&keyword='.$keyword.'&key=AIzaSyDpVRkIfoopsMZ_0KBdOcyqWCq-rSsPE_M';

        // By Text Query
        // https://developers.google.com/places/web-service/search#TextSearchRequests
        $url = 'https://maps.googleapis.com/maps/api/place/textsearch/json?location=49.246292,-123.116226&radius=5000&query=wedding+venues&key=AIzaSyDpVRkIfoopsMZ_0KBdOcyqWCq-rSsPE_M';

        $content = file_get_contents($url);
        $content = json_decode($content);

        foreach($content->results as $location) {
            echo $location->name . '<br>';

        }
    }

}
