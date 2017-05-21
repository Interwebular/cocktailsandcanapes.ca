<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Venue;

class VenueController extends Controller {


    /**
    *   Show all the venues
    *
    *   @return Response
    */
    public function index() {
        return view('admin.venues.index', [
            'notVerifiedVenues' => \App\Venue::notVerified()->get(),
            'featuredVenues' => \App\Venue::featured()->get(),
            'venues' => \App\Venue::all()
        ]);
    }

    /**
    *   Show the create venue form
    *
    *   @return Response
    */
    public function create() {
        return view('admin.venues.create');
    }

    /**
    *   Store the venue in the database
    *
    *   @return Response
    */
    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required|max:64',
            'location' => 'required',
            'address' => 'required',
            'website' => 'required',
            'phonenumber' => 'required',
            'contact_name' => '',
            'meta_title' => '',
            'description' => 'required',
            'rececption_count' => 'required|numeric',
            'dining_count' => 'required|numeric',
            'is_featured' => 'required|numeric',
            'image' => 'mimes:jpeg,png,gif,jpg|max:15000'
        ]);

        $venue = new \App\Venue;
        $venue->name = $request->name;
        $venue->location = $request->location;
        $venue->address = $request->address;
        $venue->website = $request->website;
        $venue->phonenumber = $request->phonenumber;
        $venue->contact_name = $request->contact_name;
        $venue->meta_title = $request->meta_title;
        $venue->description = $request->description;
        $venue->rececption_count = $request->rececption_count;
        $venue->dining_count = $request->dining_count;
        $venue->is_featured = $request->is_featured;
        $venue->save();

        if($request->hasFile('image') AND $request->file('image')->isValid()) {
            $prefix = app()->environment() === 'production' ? 'production/' : env('APP_ENV') . '/' . env('S3_ID') . '/';
            $imageUri = $prefix . 'venues/'.$venue->id.'/'.\Carbon\Carbon::now()->timestamp.'.'.$request->file('image')->getClientOriginalExtension();
            \Storage::put($imageUri,file_get_contents($request->file('image')->getRealPath()));
            $venue->image = 'https://s3.amazonaws.com/cdn.cocktailsandcanapes.ca/' . $imageUri;
            $venue->save();
        }

        return redirect()->route('admin.venues.index')->with('success', 'Venue Created');
    }

    /**
    *   Show the edit Venue form
    *
    *   @return Response
    */
    public function edit(Venue $venue) {

        return view('admin.venues.edit', [
            'venue' => $venue,
        ]);
    }

    /**
    *   Update the venue in the database
    *
    *   @return Response
    */
    public function save(Venue $venue, Request $request) {

        $this->validate($request, [
            'name' => 'required|max:64',
            'location' => 'required',
            'address' => 'required',
            'website' => 'required',
            'phonenumber' => 'required',
            'contact_name' => '',
            'meta_title' => '',
            'description' => 'required',
            'rececption_count' => 'required|numeric',
            'dining_count' => 'required|numeric',
            'is_featured' => 'required|numeric',
            'verified' => 'required|numeric',
            'sorting_order' => 'required|numeric',
            'image' => 'mimes:jpeg,png,gif,jpg|max:15000'
        ]);

        $venue->name = $request->name;
        $venue->location = $request->location;
        $venue->address = $request->address;
        $venue->website = $request->website;
        $venue->phonenumber = $request->phonenumber;
        $venue->contact_name = $request->contact_name;
        $venue->meta_title = $request->meta_title;
        $venue->description = $request->description;
        $venue->rececption_count = $request->rececption_count;
        $venue->dining_count = $request->dining_count;
        $venue->is_featured = $request->is_featured;
        $venue->verified = $request->verified;
        $venue->sorting_order = $request->sorting_order;
        $venue->save();

        if($request->hasFile('image') AND $request->file('image')->isValid()) {
            $prefix = app()->environment() === 'production' ? 'production/' : env('APP_ENV') . '/' . env('S3_ID') . '/';
            $imageUri = $prefix . 'venues/'.$venue->id.'/'.\Carbon\Carbon::now()->timestamp.'.'.$request->file('image')->getClientOriginalExtension();
            \Storage::put($imageUri,file_get_contents($request->file('image')->getRealPath()));
            $venue->image = 'https://s3.amazonaws.com/cdn.cocktailsandcanapes.ca/' . $imageUri;
            $venue->save();
        }

        return redirect()->route('admin.venues.edit', [$venue])->with('success', 'Venue Saved');
    }
}
