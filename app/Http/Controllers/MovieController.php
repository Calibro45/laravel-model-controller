<?php

namespace App\Http\Controllers;

use App\models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {

        // recupero dati

        $movies = Movie::all();

        dump($movies);
        
        // return della vista

        return view('home');
    }
}
