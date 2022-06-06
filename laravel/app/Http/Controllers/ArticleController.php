<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request, $slug)
    {
        $item = Article::with(['village_page'])
            ->where('slug', $slug)
            ->firstOrFail();


        return view('pages.article',[
            'item' => $item,
        ]);
    }

}
