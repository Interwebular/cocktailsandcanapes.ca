<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Image;

class GalleryController extends Controller {


    /**
    *   Show all the Images
    *
    *   @return Response
    */
    public function index() {
        return view('admin.gallery.index', [
            'images' => \App\Image::paginate(40)
        ]);
    }

    /**
    *   Show the upload Image form
    *
    *   @return Response
    */
    public function create() {
        return view('admin.gallery.create');
    }

    /**
    *   Store the meal in the database
    *
    *   @return Response
    */
    public function store(Request $request) {

        $this->validate($request, [
            'image' => 'required|mimes:jpeg,png,gif,jpg|max:15000'
        ]);

        if($request->hasFile('image') AND $request->file('image')->isValid()) {

            $image = new \App\Image;
            $image->url = 'UPLOADING';
            $image->save();
            $prefix = app()->environment() === 'production' ? 'production/' : env('APP_ENV') . '/' . env('S3_ID') . '/';
            $imageUri = $prefix . 'gallery/'.$image->id.'/'.\Carbon\Carbon::now()->timestamp.'.'.$request->file('image')->getClientOriginalExtension();
            \Storage::put($imageUri,file_get_contents($request->file('image')->getRealPath()));
            $image->url = 'http://cdn.cocktailsandcanapes.ca.s3.amazonaws.com/' . $imageUri;
            $image->save();

            return redirect()->route('admin.gallery.index')->with('success', 'Image Uploaded');
        }
        return redirect()->route('admin.gallery.index')->with('error', 'The Image could not be uploaded. Refresh and try again.');
    }


    /**
    *   Delete the image
    *
    *   @return Response
    */
    public function destroy(Image $image) {
        $image->delete();
        return redirect()->route('admin.gallery.index')->with('success', 'Image Deleted');
    }
}
