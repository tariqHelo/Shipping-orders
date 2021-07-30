<?php

namespace App\Http\Controllers\Admin;

use App\Models\Area;
use App\Http\Requests\AreaRequest;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::all();
        return view('admin.area.index')
        ->withAreas($areas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view('admin.area.create',[
           'area' => new Area(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AreaRequest $request)
    {
        $area = Area::create( $request->all() );
        \Session::flash("msg", "s:تم إضافة منطقة ($area->name) بنجاح");
        return redirect()->route('area.index');

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $area = Area::findOrFail($id);;
         return view('admin.area.edit')
         ->withArea($area);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(AreaRequest $request, $id)
    {
        $area = Area::findOrFail($id);
        $area->update( $request->all() );
        \Session::flash("msg", "s:تم تعديل منطقة ($area->name) بنجاح");
        return redirect()->route('area.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $area = Area::findOrFail($id);
        $area->delete();
        \Session::flash("msg", "w:تم حذف منطقة ($area->name) بنجاح");
        return redirect()->route('area.index');
    }
}
