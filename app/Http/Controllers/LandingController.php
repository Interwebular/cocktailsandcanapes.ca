<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;


class LandingController extends Controller
{


    public function wedding() {
        return view('landing.wedding');
    }

    public function events() {
        return view('landing.events');
    }

    public function lunch() {
        return view('landing.lunch');
    }
}
