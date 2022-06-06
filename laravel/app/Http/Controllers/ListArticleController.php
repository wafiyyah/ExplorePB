<?php
  
namespace App\Http\Controllers;
  
#use App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;
  
class ListArticleController extends Controller
{
    /**
     * Show the application dashboard
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $items = Article::with(['village_page'])
        ->latest()
        ->simplePaginate(3);
        
        return view('pages.listarticle',[
            'items' => $items,
        ]);
    }

}
