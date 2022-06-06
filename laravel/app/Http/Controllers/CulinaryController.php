<?php

namespace App\Http\Controllers;

use App\Models\Culinary;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CulinaryController extends Controller
{
    public function index(Request $request)
    {
        $items = Culinary::with(['village'])->get();
        $items = Culinary::simplePaginate(3); 

        return view('pages.culinary',[
            'items' => $items,
        ]);
    }

}
