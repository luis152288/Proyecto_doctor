<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
     public function index()
    {
    	$carousel = Carousel::get();
    	return view('welcome', compaq('carousel'));
    }
}