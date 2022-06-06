<?php
  
namespace App\Http\Controllers;
  
#use App\Http\Controllers;
use App\Models\VillagePage;
use Illuminate\Http\Request;
  
class HomeController extends Controller
{
    /**
     * Show the application dashboard
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $items = VillagePage::with(['galleries'])->get();
        return view('pages.home',[
            'items'=> $items
        ]);
    }

}
