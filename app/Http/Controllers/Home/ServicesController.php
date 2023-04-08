<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function GetServices()
    {
        return view('frontend.services');
    }

    public function Repairs()
    {
        return view('frontend.service-repairs');
    }

    public function ServiceBike()
    {
        return view('frontend.service-motorcycle');
    }

    public function ServiceMot()
    {
        return view('frontend.service-mot');
    }
}
