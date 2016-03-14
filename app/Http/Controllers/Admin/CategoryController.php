<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Category;
use App\Menu;

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
    public function create(Menu $menu) {
        return view('admin.categories.create', [
            'menu' => $menu
        ]);
    }

    /**
    *   Store the categories in the database
    *
    *   @return Response
    */
    public function store(Request $request, Menu $menu) {

        $this->validate($request, [
            'name' => 'required|max:64',
        ]);

        $category = new \App\Category;
        $category->name = $request->name;
        $category->menu_id = $menu->id;
        $category->save();

        return redirect()->route('admin.menus.show', [$menu])->with('success', 'Category Created');
    }

    /**
    *   Show the edit categories form
    *
    *   @return Response
    */
    public function edit(Menu $menu, Category $category) {

        return view('admin.categories.edit', [
            'menu' => $menu,
            'category' => $category
        ]);
    }

    /**
    *   Update the categories in the database
    *
    *   @return Response
    */
    public function save(Request $request, Menu $menu, Category $category) {

        $this->validate($request, [
            'name' => 'required|max:64',
        ]);

        $category->name = $request->name;
        $category->save();

        return redirect()->route('admin.menus.show', [$menu])->with('success', 'Saved');
    }

    /**
    *   Delete the category
    *
    *   @return Response
    */
    public function destroy(Menu $menu, Category $category) {

        foreach($category->meals as $meal) {
            $meal->category_id = null;
            $meal->save();
        }

        $category->delete();
        return redirect()->route('admin.menus.show', [$menu])->with('success', 'Category Deleted');
    }
}
