<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Meal;
use App\Menu;
use App\Category;

class MealController extends Controller {


    /**
    *   Show all the meals
    *
    *   @return Response
    */
    public function index() {
        return view('admin.meals.index', [
            'meals' => \App\Meal::all()
        ]);
    }

    /**
    *   Show the create meal form
    *
    *   @return Response
    */
    public function create(Menu $menu, Category $category = null) {

        return view('admin.meals.create', [
            'menu' => $menu,
            'category' => $category->id ? $category : null
        ]);
    }

    /**
    *   Store the meal in the database
    *
    *   @return Response
    */
    public function store(Request $request, Menu $menu, Category $category = null) {

        $this->validate($request, [
            'name' => 'required|max:64',
            'description' => '',
            'gluten_free' => 'required|numeric',
            'vegetarian' => 'required|numeric',
            'image' => 'mimes:jpeg,png,gif,jpg|max:15000'
        ]);

        $meal = new \App\Meal;
        $meal->name = $request->name;
        $meal->description = $request->description;
        $meal->menu_id = $menu->id;
        $meal->category_id = $category->id ? $category->id : null;
        $meal->gluten_free = $request->gluten_free;
        $meal->vegetarian = $request->vegetarian;
        $meal->save();

        if($request->hasFile('image') AND $request->file('image')->isValid()) {
            $prefix = app()->environment() === 'production' ? 'production/' : env('APP_ENV') . '/' . env('S3_ID') . '/';
            $imageUri = $prefix . 'meals/'.$meal->id.'/'.\Carbon\Carbon::now()->timestamp.'.'.$request->file('image')->getClientOriginalExtension();
            \Storage::put($imageUri,file_get_contents($request->file('image')->getRealPath()));
            $meal->image = 'http://cdn.cocktailsandcanapes.ca.s3.amazonaws.com/' . $imageUri;
            $meal->save();
        }

        return redirect()->route('admin.menus.show', [$menu])->with('success', 'Meal Created');
    }

    /**
    *   Show the edit meal form
    *
    *   @return Response
    */
    public function edit(Menu $menu, Meal $meal) {

        return view('admin.meals.edit', [
            'menu' => $menu,
            'meal' => $meal
        ]);
    }

    /**
    *   Update the meal in the database
    *
    *   @return Response
    */
    public function save(Request $request, Menu $menu, Meal $meal) {

        $this->validate($request, [
            'name' => 'required|max:64',
            'description' => '',
            'category' => 'required|numeric',
            'gluten_free' => 'required|numeric',
            'vegetarian' => 'required|numeric'
        ]);

        $meal->name = $request->name;
        $meal->description = $request->description;
        $meal->category_id = $request->category ? $request->category : null;
        $meal->gluten_free = $request->gluten_free;
        $meal->vegetarian = $request->vegetarian;
        $meal->save();

        if($request->hasFile('image') AND $request->file('image')->isValid()) {
            $prefix = app()->environment() === 'production' ? 'production/' : env('APP_ENV') . '/' . env('S3_ID') . '/';
            $imageUri = $prefix . 'meals/'.$meal->id.'/'.\Carbon\Carbon::now()->timestamp.'.'.$request->file('image')->getClientOriginalExtension();
            \Storage::put($imageUri,file_get_contents($request->file('image')->getRealPath()));
            $meal->image = 'http://cdn.cocktailsandcanapes.ca.s3.amazonaws.com/' . $imageUri;
            $meal->save();
        }

        return redirect()->route('admin.menus.show', [$menu])->with('success', 'Meal Saved');
    }

    /**
    *   Delete the meal
    *
    *   @return Response
    */
    public function destroy(Menu $menu, Meal $meal) {
        $meal->delete();
        return redirect()->route('admin.menus.show', [$menu])->with('success', 'Meal Deleted');
    }
}
