<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//importo classe movie 
use App\Movie;

class MovieController extends Controller
{
    /** 
     * MOVIES
     */

     public function index() {
         
        // ottendere movie dal db
        $movies = Movie::all();
        // dump( $movies); 

        //return user view
        return view('home', compact('movies'));
     }
}
