<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    //
    public function index()
    {
        $product = new Products([
            'prodName' => 'Product 1',
            'prodPrice' => 100,
            'prodDescription' => 'TESTtestTest',
                        
        ]);

        
    }
}
