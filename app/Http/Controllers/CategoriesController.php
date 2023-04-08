<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Oxford;
use Illuminate\Database\Eloquent\Collection;
use View;

class CategoriesController extends Controller
{
    public function getOxfordProducts($category_id)
    {
        $products = Oxford::select('id', 'image_url', 'description', 'sku', 'vat_price', 'category')
            ->where('category_id', $category_id)
            ->paginate(24);

        // $category = ucwords($category);

        return view('shop.products', compact('products'));
    }

    public function getHelmets($category_id, $brand)
    {
        $products = Oxford::select('id', 'image_url', 'description', 'sku', 'vat_price', 'category')
            ->where('category_id', $category_id)
            ->where('brand', 'like', $brand)
            ->where('stock', '=>', 1)
            ->paginate(24);

        $category = Oxford::select('category')
            ->where('category_id', $category_id)
            ->get();

        return view('shop.products', compact('products', 'category'));
    }
}
