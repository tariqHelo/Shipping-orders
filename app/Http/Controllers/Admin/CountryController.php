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
        $cities = City::all()->pluck('name', 'id');
         $country = Country::all();
        return view('admin.country.create')
        ->withCities($cities);
        // ->withCountry($country);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CountryRequest $request)
    {
        // $request->validate(Product::validateRules());

        $country = Country::create( $request->all() );
        $country->cities()->sync($request->input('cities', []));
        session()->flash('msg', "s:create ($country->name) successfully ");
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
         $cities = City::where('id', '=', $country->id)->get();
         dd($cities);
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
        $cities = City::all()->pluck('name', 'id');
        $country->load('cities');
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
    { //dd(20);
        $country = Country::findOrFail($id);
        $country->cities()->sync($request->input('cities', []));
        //$request->validate( Product::validateRules() );

        $country->update( $request->all() );
        session()->flash('msg', "s:updated ($country->name) successfully ");
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
           session()->flash("msg", " Deleted ($country->name) Successfully");
           return redirect()->route('country.index');

    }
}
