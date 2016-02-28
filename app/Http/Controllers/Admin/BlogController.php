<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Http\Request;

class BlogController extends Controller {


    /**
    *   Show all the blog posts
    *
    *   @return Response
    */
    public function index() {
        return view('admin.blog.index', [
            'posts' => \App\Post::orderBy('published_at', 'DESC')->paginate(20)
        ]);
    }

    /**
    *   Show the write a post page
    *
    *   @return Response
    */
    public function create() {
        return view('admin.blog.create');
    }

    /**
    *   Store the post in the database
    *
    *   @return Response
    */
    public function store(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'content' => '',
            'seo_description' => 'max:155',
            'public' => 'numeric',
        ]);

        $post = new \App\Post;
        $post->user_id = $request->user()->id;
        $post->title = $request->title;
        $post->content = $request->content;
        $post->seo_description = $request->seo_description ? $request->seo_description : null;
        $post->seo_keywords = $request->seo_keywords ? $request->seo_keywords : null;
        $post->published_at = \Carbon\Carbon::today();
        $post->public = $request->public;
        // @todo
        $post->image = 'http://placehold.it/1000x500';
        $post->save();

        $post->slug = $post->id . '-' . str_slug($post->title);
        $post->save();

        return redirect()->route('admin.blog.index')->with('success', 'Saved!');
    }

    /**
    *   Show the edit meal form
    *
    *   @return Response
    */
    public function edit(\App\Post $post) {

        return view('admin.blog.edit', [
            'post' => $post
        ]);
    }

    /**
    *   Update the blog post in the database
    *
    *   @return Response
    */
    public function save(\App\Post $post, Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'content' => '',
            'seo_description' => 'max:155',
            'public' => 'numeric',
        ]);

        $post->title = $request->title;
        $post->content = $request->content;
        $post->seo_description = $request->seo_description ? $request->seo_description : null;
        $post->seo_keywords = $request->seo_keywords ? $request->seo_keywords : null;
        $post->published_at = $request->published_at;
        $post->public = $request->public;
        // @todo
        $post->image = 'http://placehold.it/1000x500';
        $post->save();

        $post->slug = $post->id . '-' . str_slug($post->title);
        $post->save();

        return redirect()->route('admin.blog.edit', [$post])->with('success', 'Saved!');
    }
}
