<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Para pasar solo la clase por default
    public function __invoke() {
        return view('home');
    }

    public function indexLaravel() {
        return view('welcome');
    }
}
