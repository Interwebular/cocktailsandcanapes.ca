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
            'menus' => \App\Menu::all()
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
            'download_link' => ''
        ]);

        $menu = new \App\Menu;
        $menu->name = $request->name;
        $menu->slug = str_slug($request->name);
        $menu->download_link = $request->download_link;
        $menu->pricing = $request->pricing;
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
            'download_link' => ''
        ]);

        if($menu->name != $request->name)
            $menu->slug = str_slug($request->name);

        $menu->name = $request->name;
        $menu->download_link = $request->download_link;
        $menu->pricing = $request->pricing;
        $menu->save();

        return redirect()->route('admin.menus.edit', [$menu])->with('success', 'Menu Saved');
    }
}
