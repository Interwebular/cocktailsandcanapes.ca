<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;


class VenueController extends Controller
{


    public function index(Request $request) {

        $featuredVenues = \App\Venue::featured()->get();

        if($request->page && $request->page > 1) {
            $featuredVenues = null;
        }

        return view('venues.index', [
            'featuredVenues' => $featuredVenues,
            'venues' => \App\Venue::verified()->paginate(25)
        ]);
    }

    public function show(\App\Venue $venue) {

        return view('venues.show', [
            'venue' => $venue
        ]);
    }

    public function submit() {
        return view('venues.submit');
    }

    public function postSubmit(Request $request) {
        $this->validate($request, [
            'name' => 'required|max:128',
            'location' => 'required',
            'address' => 'required',
            'website' => 'url',
            'phonenumber' => '',
            'contact_name' => '',
            'description' => '',
            'rececption_count' => 'numeric',
            'dining_count' => 'numeric',
            'image' => 'mimes:jpeg,png,gif,jpg|max:5000',
            'g-recaptcha-response' => 'required|recaptcha'
        ]);

        $venue = new \App\Venue;
        $venue->name = $request->name;
        $venue->location = $request->location;
        $venue->address = $request->address ? $request->address : 0;
        $venue->website = $request->website ? $request->website : 0;
        $venue->phonenumber = $request->phonenumber ? $request->phonenumber : 0;
        $venue->contact_name = $request->contact_name ? $request->contact_name : 0;
        $venue->description = $request->description ? $request->description : 0;
        $venue->rececption_count = $request->rececption_count ? $request->rececption_count : 0;
        $venue->dining_count = $request->dining_count ? $request->dining_count : 0;
        $venue->verified = 0;
        $venue->is_featured = 0;
        $venue->save();

        if($request->hasFile('image') AND $request->file('image')->isValid()) {
            $prefix = app()->environment() === 'production' ? 'production/' : env('APP_ENV') . '/' . env('S3_ID') . '/';
            $imageUri = $prefix . 'venues/'.$venue->id.'/'.\Carbon\Carbon::now()->timestamp.'.'.$request->file('image')->getClientOriginalExtension();
            \Storage::put($imageUri,file_get_contents($request->file('image')->getRealPath()));
            $venue->image = 'http://cdn.cocktailsandcanapes.ca.s3.amazonaws.com/' . $imageUri;
            $venue->save();
        }

        return redirect()->route('venues.submit')->with('success', 'Your venue has been submitted! Thank you.');
    }
}
