<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Carousel;
use App\Services;
use App\Team;

class FrontendController extends Controller
{
     public function index()
    {
    	$carousel = Carousel::get();
    	return view('welcome', compaq('carousel'));
    }
}
