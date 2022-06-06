<?php

namespace App\Http\Controllers;

use App\Models\VillagePage;
use App\Models\SjpCulinary;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = VillagePage::with(['galleries'])
            ->where('slug', $slug)
            ->firstOrFail();


        return view('pages.profile',[
            'item' => $item,
        ]);
    }

}
