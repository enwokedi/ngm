<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function ProductTypes()
    {
        return view('shop.product-types');
    }

    public function Accessories()
    {
        return view('shop.accessories');
    }

    public function HandlebarAccessories()
    {
        return view('shop.handlebar-accessories');
    }

    public function GpsTracker()
    {
        return view('shop.gps-tracker
        ');
    }

    public function SpareParts()
    {
        return view('shop.spare-parts');
    }
}
