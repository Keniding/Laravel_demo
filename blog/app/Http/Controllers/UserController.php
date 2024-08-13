<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = User::orderBy('id', 'desc')->paginate(4);
        return view('user.index', compact('users'));
    }

    public function show(User $user) {
        // Se realiza una busqueda inferida que usa el campo con el mismo nombre que el parametro, en este caso $id
        // De esta forma podemos reducíon el codigo
        // show($id) { $user = User::find($id); } == show(User $user) {}
        //$user = User::find($id);
        return view('user.show', compact('user'));
    }

    public function create() {
        return view('user.create');
    }

    public function createSlug($string, $id) {
        $slug = str_replace(' ', '-', $string);
        $slug = strtolower($slug);
        $slug = preg_replace('/[^a-z0-9-]/', '', $slug);
        $slug = preg_replace('/-+/', '-', $slug);
        $slug = trim($slug, '-');
        $slug = $slug . '-' . $id;
        return $slug;
    }

    public function store() {
        $user = new User();
        $user->name = request('name');
        $user->slug = '';
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        // Slug intuitivo creado
        $user->slug = $this->createSlug($user->name, $user->id);
        $user->save();
        return redirect()->route('user.index');
    }

    public function edit(User $user) { // edit(User $id) {
        // $user = User::find($id);
        return view('user.edit', compact('user'));
    }

    public function update(User $user) { // update($id) {
        // $user = User::find($id);
        $user->name = request('name');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();
        return redirect()->route('user.index');
    }

    public function destroy(User $user) { // destroy($id) {
        // $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
