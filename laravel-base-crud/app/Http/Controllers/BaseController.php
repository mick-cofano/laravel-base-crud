<?php

namespace App\Http\Controllers;

use App\Beer;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index() {

      $beers = Beer::all();

      // return view('home', ['beers' => $beers]); standard method

      return view('home', compact('beers')); // laravel method
    }
}
