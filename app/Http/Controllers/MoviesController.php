<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;


class MoviesController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies', compact(['movies']));
    }

    public function show($id)
    {
        $movie = Movie::find($id);
        return view('movie', compact(['movie']));
    }
    public function create(){
        return view('create');
    }
    public function store(){
        $this->validate(request(),['title'=>'required', 'genre'=>'required','director'=>'required', 'year' => 'required|digits:4|integer|min:1900|max:2018','storyline'=>'required|min:1000']);
        Movie::create(request()->all());
        return redirect()->route('all-movies');
    }
}
