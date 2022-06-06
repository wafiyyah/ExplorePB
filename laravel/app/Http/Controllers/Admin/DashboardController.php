<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Tour;
use App\Models\Culinary;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.admin.dashboard',[
            'article' => Article::count(),
            'tour' => Tour::count(),
            'culinary' => Culinary::count(),
            'product' => Product::count(),
        ]);
    }
}
