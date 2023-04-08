<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RentalsController extends Controller
{
    public function RentBike()
    {
        return view('frontend.rentals-motorcycles');
    }

    public function RentalDetails()
    {
        return view('frontend.rentals-details');
    }

    public function DemoDetails()
    {
        return view('frontend.rentals-hondapcx125');
    }

    public function RentInformation()
    {
        return view('frontend.rentals-information');
    }
}
