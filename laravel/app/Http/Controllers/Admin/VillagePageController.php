<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VillagePage;
use App\Http\Requests\Admin\VillagePageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class VillagePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items = VillagePage::all();

        return view('pages.admin.village-page.index', [
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
        return view('pages.admin.village-page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VillagePageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = str::slug($request->title);

        VillagePage::create($data);
        return redirect()->route('village_page.index');
        
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
        $item = VillagePage::findOrFail($id);

        return view('pages.admin.village-page.edit', [
            'item'=>$item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VillagePageRequest $request, $id)
    {
        $data = $request->all();

        $item = VillagePage::findOrFail($id);

        $item->update($data);

        return redirect()->route('village_page.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $item = VillagePage::findOrFail($id);
        $item->delete();

        return redirect()->route('village_page.index');
    }
}
