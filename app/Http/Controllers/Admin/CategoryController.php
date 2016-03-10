<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Category;

class CategoryController extends Controller {


    /**
    *   Show all the categories
    *
    *   @return Response
    */
    public function index() {
        return view('admin.categories.index', [
            'categories' => \App\Category::all()
        ]);
    }

    /**
    *   Show the create categories form
    *
    *   @return Response
    */
    public function create() {
        return view('admin.categories.create', [
            'menus' => \App\Menu::all()
        ]);
    }

    /**
    *   Store the categories in the database
    *
    *   @return Response
    */
    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required|max:64',
            'menu' => 'required|exists:menus,id',
        ]);

        $category = new \App\Category;
        $category->name = $request->name;
        $category->menu_id = $request->menu;
        $category->save();

        return redirect()->route('admin.categories.index')->with('success', 'Category Created');
    }

    /**
    *   Show the edit categories form
    *
    *   @return Response
    */
    public function edit(Category $category) {

        return view('admin.categories.edit', [
            'category' => $category,
            'menus' => \App\Menu::all()
        ]);
    }

    /**
    *   Update the categories in the database
    *
    *   @return Response
    */
    public function save(Category $category, Request $request) {

        $this->validate($request, [
            'name' => 'required|max:64',
            'menu' => 'required|exists:menus,id',
        ]);

        $category->name = $request->name;
        $category->menu_id = $request->menu;
        $category->save();

        return redirect()->route('admin.categories.edit', [$category])->with('success', 'Saved');
    }
}
