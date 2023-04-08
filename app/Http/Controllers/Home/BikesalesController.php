<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BikesalesController extends Controller
{
    public function ForSale()
    {
        return view('frontend.sale-motorcycles');
    }
    public function AccidentClaim()
    {
        return view('frontend.accidents');
    }
}
