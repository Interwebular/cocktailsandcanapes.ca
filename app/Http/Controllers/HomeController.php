<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;


class HomeController extends Controller
{

    /**
    *   Show the Home page
    *
    *   @return Response
    */
    public function index() {

        return view('website.home');

    }
}
