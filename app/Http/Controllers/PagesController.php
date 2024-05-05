<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use App\Models\Movie;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index()
    {
        return view('home');
    }

    public function comics()
    {
        $comics = Comic::all();
        return view('comics', compact('comics'));
    }

    public function movies()
    {
        $movies = Movie::all();
        return view('movies', compact('movies'));
    }

    public function incomplete()
    {
        return view('incomplete');
    }
}
