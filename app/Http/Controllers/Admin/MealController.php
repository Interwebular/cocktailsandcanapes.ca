<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Meal;

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
    public function create() {
        return view('admin.meals.create', [
            'menus' => \App\Menu::all()
        ]);
    }

    /**
    *   Store the meal in the database
    *
    *   @return Response
    */
    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required|max:64',
            'description' => 'required',
            'menu' => 'required|exists:menus,id',
            'gluten_free' => 'required|numeric'
        ]);

        $meal = new \App\Meal;
        $meal->name = $request->name;
        $meal->description = $request->description;
        $meal->menu_id = $request->menu;
        $meal->gluten_free = $request->gluten_free;
        $meal->save();

        return redirect()->route('admin.meals.index')->with('success', 'Meal Created');
    }

    /**
    *   Show the edit meal form
    *
    *   @return Response
    */
    public function edit(Meal $meal) {

        return view('admin.meals.edit', [
            'meal' => $meal,
            'menus' => \App\Menu::all()
        ]);
    }

    /**
    *   Update the meal in the database
    *
    *   @return Response
    */
    public function save(Meal $meal, Request $request) {

        $this->validate($request, [
            'name' => 'required|max:64',
            'description' => 'required',
            'menu' => 'required|exists:menus,id',
            'gluten_free' => 'required|numeric'
        ]);

        $meal->name = $request->name;
        $meal->description = $request->description;
        $meal->menu_id = $request->menu;
        $meal->gluten_free = $request->gluten_free;
        $meal->save();

        return redirect()->route('admin.meals.edit', [$meal])->with('success', 'Meal Saved');
    }
}
