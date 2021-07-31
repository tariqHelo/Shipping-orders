<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $cars = Car::all();
        return view('admin.car.index' , compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.car.create',[
       'car' => new Car()
       ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = Car::create($request->all());
        \Session::flash("msg", "s:تم إضافة مركبة ($car->name) بنجاح");
        return redirect(route('car.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $car = Car::findOrFail($id);
        return view('admin.car.edit', [
        'car' => $car,
        // 'cities' => $cities,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $car = Car::findOrFail($id);
        $car->update($request->all());
        \Session::flash("msg", "s:تم تعديل مركبة ($car->name) بنجاح");
        return redirect(route('car.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $car = Car::findOrFail($id);
       $car->delete();
       \Session::flash("msg", "w:تم حذف مركبة ($car->name) بنجاح");
       return redirect()->route('car.index');
    }
}
