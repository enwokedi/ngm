<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function HomeMain()
    {
        return view('frontend.index');
    } // end mehtod 

    public function AboutMethod()
    {
        return view('frontend.about_page');
    } // end mehtod 

    public function ContactMethod()
    {
        return view('contact');
    }
}
