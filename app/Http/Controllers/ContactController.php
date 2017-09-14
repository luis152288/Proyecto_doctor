<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function contacto(Request $request)
    {
    	Mail::to('puestopd@gmail.com')->send(new ContactMail($request));
    }
}
