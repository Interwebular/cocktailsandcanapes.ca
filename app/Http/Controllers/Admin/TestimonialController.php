<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Http\Request;

class TestimonialController extends Controller {


    /**
    *   Show all the testimonials
    *
    *   @return Response
    */
    public function index() {
        return view('admin.testimonials.index', [
            'testimonials' => \App\Testimonial::paginate(25)
        ]);
    }

    /**
    *   Show the write a post page
    *
    *   @return Response
    */
    public function create() {
        return view('admin.testimonials.create');
    }

    /**
    *   Store the post in the database
    *
    *   @return Response
    */
    public function store(Request $request) {

        $this->validate($request, [
            'client' => 'required',
            'content' => 'required',
        ]);

        $testimonial = new \App\Testimonial;
        $testimonial->client = $request->client;
        $testimonial->content = $request->content;
        $testimonial->save();

        return redirect()->route('admin.testimonials.index')->with('success', 'Saved!');
    }

    /**
    *   Show the edit testimonial form
    *
    *   @return Response
    */
    public function edit(\App\Testimonial $testimonial) {

        return view('admin.testimonials.edit', [
            'testimonial' => $testimonial
        ]);
    }

    /**
    *   Update the testimonial in the database
    *
    *   @return Response
    */
    public function save(\App\Testimonial $testimonial, Request $request) {

        $this->validate($request, [
            'client' => 'required',
            'content' => 'required',
        ]);

        $testimonial->client = $request->client;
        $testimonial->content = $request->content;
        $testimonial->save();

        return redirect()->route('admin.testimonials.edit', [$testimonial])->with('success', 'Saved!');
    }
}
