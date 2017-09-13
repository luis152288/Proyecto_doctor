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
        $about = About::get();
        $services = Services::get();
        $team = Team::get();
    	return view('welcome', compact('carousel', 'about', 'services', 'team'));

    	
    	
    }
}
