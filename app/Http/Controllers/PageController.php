<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;


class PageController extends Controller
{

    /**
     * Show the page
     *
     * @return Response
     */
    public function show($page = 'home', $subpage = null) {

        //return $subpage ? view('website.'.$page.'.'.$subpage) : view('website.'.$page);
    }

}
