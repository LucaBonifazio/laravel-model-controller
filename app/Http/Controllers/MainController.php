<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main() {
        $movies = Movie::all();

        return view('guest.main', [
            'movies' => $movies,
        ]);
    }

    public function movie() {
        $movies = Movie::where('id', 1)->get();

        return view('guest.movie', [
            'movies' => $movies,
        ]);
    }
}
