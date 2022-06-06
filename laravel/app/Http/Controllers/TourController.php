<?php
  
namespace App\Http\Controllers;
  
#use App\Http\Controllers;
use App\Models\Tour;
use Illuminate\Http\Request;
  
class TourController extends Controller
{
    /**
     * Show the application dashboard
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $items = Tour::with(['galleries'])->get();
        $items = Tour::simplePaginate(9); 
        return view('pages.tour',[
            'items'=> $items
        ]);
    }

}
