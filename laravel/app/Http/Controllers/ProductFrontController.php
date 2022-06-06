<?php

namespace App\Http\Controllers;

use App\Models\Village;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductFrontController extends Controller
{
    public function index(Request $request)
    {
        $items = Product::with(['village'])->get();
        $items = Product::simplePaginate(3); 

        return view('pages.product',[
            'items' => $items,
        ]);
    }

}
