<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\DB;
use App\Models\Price;
use App\Models\Service;
use App\Models\City;
use App\Models\Area;
use App\Models\Location;


use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        // $location = location::pluck('area_id')->first();
        // $prices = Price::where('price','=', $location);
        //$cities = City::where('id', '=', $country->id)->get();
        //dd($prices);
        $services = Service::all();
       return view('admin.area_price.index' , [
        //    'countries' => $countries ,
            'services' =>$services
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
         $services = Service::all();
        return view('admin.area_price.create',[
       'countries' => $countries,
       'services' =>$services
       ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     //dd($request->all());
           //$services = Service::all();
            $services = $request->services;

            $location = new Location();
            $location->country_id = $request->country_id;
            $location->city_id = $request->city_id;
            $location->area_id = $request->area_id;
            $location->save();

        foreach($services as $s){
            $priceService = new Price();
            $priceService->location_id = $location->id; 
            $priceService->service_id = $s['id'];//1
            $priceService->price = $s['value'];//20nis
            $priceService->save();
        }
       // return "good";
        \Session::flash("msg", "تم إضافة الإسعار بنجاح ");
        return redirect()->route('price.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function edit(Price $price)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Price $price)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function destroy(Price $price)
    {
        //
    }

    public function get_cities(Request $request)
    {
        $cities = City::whereCountryId($request->country_id)->pluck('name' , 'id');
         return response()->json($cities);
    }

    public function get_districts(Request $request)
    {
        $districts = Area::whereCityId($request->city_id)->pluck('name' , 'id');
         return response()->json($districts); 
    }
}
