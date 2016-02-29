<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;


class BlogController extends Controller
{

    /**
    *   Show the Blog
    *
    *   @return Response
    */
    public function index() {

        return view('blog.index', [
            'posts' => \App\Post::where('public', 1)->orderBy('published_at', 'DESC')->paginate(5),
            'recentPosts' => \App\Post::where('public', 1)->orderBy('published_at', 'DESC')->take(5)->get()
        ]);
    }

    /**
    *   Show a blog post
    *
    *   @return Response
    */
    public function show($slug) {

        return view('blog.show', [
            'post' => \App\Post::where('slug', $slug)->firstOrFail(),
            'recentPosts' => \App\Post::where('public', 1)->orderBy('published_at', 'DESC')->take(5)->get()
        ]);
    }
}
