<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

class TourDetailController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = Tour::with(['galleries'])
            ->where('slug', $slug)
            ->firstOrFail();


        return view('pages.tourdetail',[
            'item' => $item,
        ]);
    }

}
