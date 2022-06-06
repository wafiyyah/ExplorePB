<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CulinaryRequest;
use App\Models\Culinary;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CulinaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $items = Culinary::with(['village'])->simplePaginate(10);

        return view('pages.admin.culinary.index', [
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
        $villages = Village::all();
        return view('pages.admin.culinary.create', [
            'villages'=>$villages
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CulinaryRequest $request)
    {
        $data = $request->all();
      
        $data['image'] = $request->file('image')->store(
            'Kuliner', 'public'
        ); 

        Culinary::create($data);
        
        return redirect()->route('culinary.index');
        
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
        $item = Culinary::findOrFail($id);
        $villages = Village::all();

        return view('pages.admin.culinary.edit', [
            'item'=>$item,
            'villages' => $villages
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CulinaryRequest $request, $id)
    {
        $data = $request->all();
        
        $data['image'] = $request->file('image')->store(
            'Kuliner', 'public'
        ); 

        $item = Culinary::findOrFail($id);

        $item->update($data);

        return redirect()->route('culinary.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $item = Culinary::findOrFail($id);
        $item->delete();

        return redirect()->route('culinary.index');
    }
}
