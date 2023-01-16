<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function base() {
        $movies = Movie::all();

        return view('guest.layouts.base', [
            'movies' => $movies,
        ])->name('base');
    }
}
