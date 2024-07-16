<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class MarketplaceController extends Controller
{
    //
    public function index()
    {
        $product = new Products();
        $product->prodName = "test";
        $product->prodPrice = 100;
        $product->prodDesc = "test";
        $product->create();

        return view('marketplace');
        // $listings = Products::orderBy('posted_by','product_name','description');
    }

    // return view('marketplace',[
    //     'listings' => $listings->paginate(10)
    // ]);
}
