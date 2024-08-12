<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = User::orderBy('id', 'desc')->paginate(4);
        return view('user.index', compact('users'));
    }

    public function show($id) {
        $user = User::find($id);
        return view('user.show', compact(['id', 'user']));
    }

    public function create() {
        return view('user.create');
    }

    public function store() {
        $user = new User();
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();
        return redirect()->route('user.index');
    }

    public function edit($id) {
        $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    public function update($id) {
        $user = User::find($id);
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();
        return redirect()->route('user.index');
    }

    public function destroy($id) {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
