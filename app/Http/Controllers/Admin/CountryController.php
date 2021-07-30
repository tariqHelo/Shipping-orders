<?php

namespace App\Http\Controllers\Admin;

use App\Models\Country;
use App\Models\City;
use App\Models\CountryCity;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CountryRequest;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $countries = Country::all();
        return view('admin.country.index')
        ->withCountries($countries);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        $cities = City::pluck('name', 'id');
        return view('admin.country.create',[
            'cities' => $cities
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryRequest $request)
    {
        $country = Country::create($request->all());
        $country->cities($request->input('city_id', []));
       // session()->flash('msg', "s:create ($country->name) successfully ");
        \Session::flash("msg", "s:تم إضافة دولة ($country->name) بنجاح");
        return redirect(route('country.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $country = Country::findOrFail($id);
         //$cities = City::where('id', '=', $country->id)->get();
         $cities= $country->cities;
         return view('admin.country.show', [
        'cities' => $cities,
         ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $country = Country::findOrFail($id);
        $cities = City::pluck('name', 'id');
       // $country->load('cities');
        return view('admin.country.edit', [
            'country' => $country,
            'cities' => $cities,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {    //dd($request->all());
        $country = Country::findOrFail($id);
       // $country->cities()->sync($request->input('cities', []));
        //$request->validate( Product::validateRules() );

        $country->update( $request->all() );
       // session()->flash('msg', "s:updated ($country->name) successfully ");
        \Session::flash("msg", "s:تم تعديل دولة ($country->name) بنجاح");
        return redirect()->route('country.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $country = Country::findOrFail($id);
           $country->delete();
          // session()->flash("msg", "w: Deleted ($country->name) Successfully");
          \Session::flash("msg", "w:تم حذف دولة ($country->name) بنجاح");
           return redirect()->route('country.index');

    }
}
