<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProfileGallery;
use App\Http\Requests\Admin\ProfileGalleryRequest;
use App\Models\VillagePage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProfileGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items = ProfileGallery::with(['village_page'])->get();

        return view('pages.admin.profile-gallery.index', [
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
        $village_pages = VillagePage::all();
        return view('pages.admin.profile-gallery.create', [
            'village_pages'=>$village_pages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileGalleryRequest $request)
    {
        $data = $request->all();
      
        $data['image'] = $request->file('image')->store(
            'assets/gallery', 'public'
        ); 

        ProfileGallery::create($data);
        
        return redirect()->route('profile_gallery.index');
        
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
        $item = ProfileGallery::findOrFail($id);
        $village_pages = VillagePage::all();

        return view('pages.admin.profile-gallery.edit', [
            'item'=>$item,
            'village_pages' => $village_pages
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileGalleryRequest $request, $id)
    {
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/gallery', 'public'
        ); 

        $item = ProfileGallery::findOrFail($id);

        $item->update($data);

        return redirect()->route('profile_gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $item = ProfileGallery::findOrFail($id);
        $item->delete();

        return redirect()->route('profile_gallery.index');
    }
}
