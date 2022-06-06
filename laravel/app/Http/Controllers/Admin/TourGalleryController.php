<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TourGallery;
use App\Http\Requests\Admin\TourGalleryRequest;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TourGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items = TourGallery::with(['tour'])->simplePaginate(10);

        return view('pages.admin.tour-gallery.index', [
            'items'=>$items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tours = Tour::all();
        return view('pages.admin.tour-gallery.create', [
            'tours'=>$tours
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TourGalleryRequest $request)
    {
        $data = $request->all();
      
        $data['image'] = $request->file('image')->store(
            'assets/tourgallery', 'public'
        ); 

        tourGallery::create($data);
        
        return redirect()->route('tour_gallery.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = TourGallery::findOrFail($id);
        $tours = Tour::all();

        return view('pages.admin.tour-gallery.edit', [
            'item'=>$item,
            'tours' => $tours
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TourGalleryRequest $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/tourgallery', 'public'
        ); 

        $item = TourGallery::findOrFail($id);

        $item->update($data);

        return redirect()->route('tour_gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $item = TourGallery::findOrFail($id);
        $item->delete();

        return redirect()->route('tour_gallery.index');
    }
}
