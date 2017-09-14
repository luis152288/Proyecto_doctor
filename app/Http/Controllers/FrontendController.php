<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Carousel;
use App\Services;
use App\Team;
use Mail;

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

     public function sendEmail(Request $request){

        
        $datos= [
            'datos' => [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'message' => $request->input('message')
            ]
        ];

        Mail::send('contactmail', $datos, function ($message) {
            $message->subject('Mensaje desde Contacto'); // Asunto del Correo 
            $message->to('puestopd@gmail.com'); // Correo al que llegara el mensaje           
        });

        return redirect()->route('welcome')->with('mensaje', 'Mensaje Enviado Exitosamente');

        
    }
}
