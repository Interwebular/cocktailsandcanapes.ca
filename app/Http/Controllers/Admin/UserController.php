<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Http\Request;

class UserController extends Controller {


    /**
    *   Show all the users
    *
    *   @return Response
    */
    public function index() {
        return view('admin.users.index', [
            'users' => \App\User::all()
        ]);
    }

    /**
    *   Show the add user form
    *
    *   @return Response
    */
    public function create() {
        return view('admin.users.create');
    }

    /**
    *   Store the user in the database
    *
    *   @return Response
    */
    public function store(Request $request) {

        $this->validate($request, [
            'name' => 'required|max:64',
            'email' => 'required|email|max:64|unique:users,email'
        ]);

        $password = str_random(8);

        $user = new \App\User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($password);
        $user->save();


        return redirect()->route('admin.users.index')->with('success', 'User Created');
    }
}
