<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Meal;
use App\Menu;

class HomeController extends Controller
{

    /**
    *   Show the Home page
    *
    *   @return Response
    */
    public function index() {

        $canapes = Menu::where('slug', 'hot-canapes')->first();

        if($canapes)
            $canapes = $canapes->meals()->whereNotNull('image')->orderBy('sorting_order', 'ASC')->take(6)->get();
        else
            $canapes = null;

        $dinners = Menu::where('slug', 'plated-dinner-fine')->first();

        if($dinners)
            $dinners = $dinners->meals()->whereNotNull('image')->take(6)->get();
        else
            $dinners = null;

        $images = \App\Image::all();

        if (!$images->isEmpty()) {
            // if (!count($images) < 6) {
                $images = $images->random(6);
            // }
        }

        return view('website.home', [
            'canapes' => $canapes,
            'dinners' => $dinners,
            'images' => $images,
            'posts' => \App\Post::where('public', 1)->orderBy('published_at', 'DESC')->take(3)->get()
        ]);
    }
}
