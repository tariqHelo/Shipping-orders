<?php

namespace App\Http\Controllers\Admin;

use App\Models\City;
use App\Models\Area;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequest;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cities = City::all();
        return view('admin.city.index')
        ->withCities($cities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $areas = Area::pluck('name', 'id');
        return view('admin.city.create',[
            'areas' => $areas,
            'city' => new City(),
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CityRequest $request)
    {
          $city = City::create( $request->all() );
          $city->areas()->sync($request->input('areas', []));
         \Session::flash("msg", "s:تم إضافة مدينة ($city->name) بنجاح");
          return redirect()->route('city.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $city = City::findOrFail($id);
        //$cities = City::where('id', '=', $country->id)->get();
        $areas= $city->areas;
        return view('admin.city.show', [
        'areas' => $areas,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {     
           $city = City::findOrFail($id);;
           return view('admin.city.edit')
           ->withCity($city);
           
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(CityRequest $request, $id)
    {
       $city = City::findOrFail($id);
        $city->update( $request->all() );
        \Session::flash("msg", "s:تم تعديل مدينة ($city->name) بنجاح");
        return redirect()->route('city.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $city = City::findOrFail($id);
      $city->delete();
     // session()->flash("msg", "e: Deleted ($city->name) Successfully");
     \Session::flash("msg", "w:تم حذف مدينة ($city->name) بنجاح");
      return redirect()->route('city.index');

    }
}
