<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\Menu;

class MenuController extends Controller {


    /**
    *   Show all the users
    *
    *   @return Response
    */
    public function index() {
        return view('admin.menus.index', [
            'menus' => \App\Menu::orderBy('sorting_order', 'ASC')->get()
        ]);
    }

    /**
    *   Show the create menu form
    *
    *   @return Response
    */
    public function create() {
        return view('admin.menus.create');
    }

    /**
    *   Store the user in the database
    *
    *   @return Response
    */
    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required|max:64|unique:menus,name',
            'download_link' => '',
            'is_coming_soon' => 'required|numeric',
            'type' => 'required'
        ]);

        $menu = new \App\Menu;
        $menu->name = $request->name;
        $menu->slug = str_slug($request->name);
        $menu->download_link = $request->download_link;
        $menu->pricing = $request->pricing;
        $menu->description = $request->description;
        $menu->is_coming_soon = $request->is_coming_soon;
        $menu->type = $request->type;
        $menu->save();

        return redirect()->route('admin.menus.index')->with('success', 'Menu Created');
    }

    /**
    *   Show the menu
    *
    *   @return Response
    */
    public function show(Menu $menu) {

        return view('admin.menus.show', [
            'menu' => $menu
        ]);
    }

    /**
    *   Show the edit menu form
    *
    *   @return Response
    */
    public function edit(Menu $menu) {

        return view('admin.menus.edit', [
            'menu' => $menu
        ]);
    }

    /**
    *   Update the menu in the database
    *
    *   @return Response
    */
    public function save(Menu $menu, Request $request) {

        $this->validate($request, [
            'name' => 'required|max:64|unique:menus,name,'.$menu->id,
            'download_link' => '',
            'is_coming_soon' => 'required|numeric',
            'sorting_order' => 'required|numeric',
            'type' => 'required'
        ]);

        if($menu->name != $request->name)
            $menu->slug = str_slug($request->name);

        $menu->name = $request->name;
        $menu->download_link = $request->download_link;
        $menu->pricing = $request->pricing;
        $menu->description = $request->description;
        $menu->is_coming_soon = $request->is_coming_soon;
        $menu->sorting_order = $request->sorting_order;
        $menu->type = $request->type;
        $menu->save();

        return redirect()->route('admin.menus.edit', [$menu])->with('success', 'Menu Saved');
    }

    public function delete(Menu $menu) {

        \DB::table('meals')->where('menu_id', $menu->id)->delete();
        $menu->delete();

        return redirect()->back()->with('success', 'Menu Deleted');
    }
}
