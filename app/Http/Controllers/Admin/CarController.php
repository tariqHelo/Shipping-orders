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
        $file = $request->file('image');
        $car = new Car([
           'vehicle_type' => $request->post('vehicle_type'),
           'image' => $file->store('/', ['disk' => 'uploads']),
            'model' => $request->post('model'),
            'chassis_number' => $request->post('chassis_number'),
            'vehicle_class' => $request->post('vehicle_class'),
            'vehicle_no' => $request->post('vehicle_no'),
            'licensing_authority' => $request->post('licensing_authority'),
            'property_type' => $request->post('property_type'),
            'traffic_code' => $request->post('traffic_code'),
            'registration_date' => $request->post('registration_date'),
            'registration_end_date' => $request->post('registration_end_date'),
            'insurance_date' => $request->post('insurance_date'),
            'insurance_expiry_date' => $request->post('insurance_expiry_date'),
            'insurance_company' => $request->post('insurance_company'),
            'salik_tag_number' => $request->post('salik_tag_number'),
            'Traffic_toll_card_number' => $request->post('Traffic_toll_card_number'),
            'passing_card_number' => $request->post('passing_card_number'),
            'note' => $request->post('note'),
            'status' => $request->post('status'),
        ]);
        \Session::flash("msg", "s:تم إضافة مركبة ($car->vehicle_type) بنجاح");
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
        $file = $request->file('image');
        $car->update([
           'vehicle_type' => $request->post('vehicle_type'),
           'image' => $file->store('/', ['disk' => 'uploads']),
            'model' => $request->post('model'),
            'chassis_number' => $request->post('chassis_number'),
            'vehicle_class' => $request->post('vehicle_class'),
            'vehicle_no' => $request->post('vehicle_no'),
            'licensing_authority' => $request->post('licensing_authority'),
            'property_type' => $request->post('property_type'),
            'traffic_code' => $request->post('traffic_code'),
            'registration_date' => $request->post('registration_date'),
            'registration_end_date' => $request->post('registration_end_date'),
            'insurance_date' => $request->post('insurance_date'),
            'insurance_expiry_date' => $request->post('insurance_expiry_date'),
            'insurance_company' => $request->post('insurance_company'),
            'salik_tag_number' => $request->post('salik_tag_number'),
            'Traffic_toll_card_number' => $request->post('Traffic_toll_card_number'),
            'passing_card_number' => $request->post('passing_card_number'),
            'note' => $request->post('note'),
            'status' => $request->post('status'),
        ]);
        \Session::flash("msg", "s:تم تعديل مركبة ($car->vehicle_type) بنجاح");
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
       \Session::flash("msg", "w:تم حذف مركبة ($car->vehicle_type) بنجاح");
       return redirect()->route('car.index');
    }
}
