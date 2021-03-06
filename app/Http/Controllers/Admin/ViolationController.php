<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Violation;
use App\Models\Car;

use Illuminate\Http\Request;

class ViolationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $violations = Violation::all();
        return view('admin.violations.index')
        ->withViolations($violations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  //dd(20);
        $cars = Car::pluck('name' , 'id');
       return view('admin.violations.create',[
        'cars' => $cars,
        'violation' => new Violation()
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
        //dd($request->image);
        if ($request->hasFile('image')) {
            $file = $request->file('image'); // UplodedFile Object
            $image_path = $file->store('/', [
                'disk' => 'uploads',
            ]);
            $request->merge([
                'image' => $image_path,
            ]);
        }
        $violation = Violation::create($request->all());
        \Session::flash("msg", "s:تم إضافة مركبة ($violation->violation_number) بنجاح");
        return redirect(route('violation.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Violation  $violation
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { //dd($id);
        $violation = Violation::findOrFail($id);
        return view('admin.violations.edit', [
        'violation' => $violation,
        // 'cities' => $cities,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Violation  $violation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $violation = Violation::findOrFail($id);
       $cars = Car::pluck('name' , 'id');
       return view('admin.violations.edit', [
       'violation' => $violation,
        'cars' => $cars,
        
       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Violation  $violation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $violation = Violation::findOrFail($id);
        $violation->update($request->all());
        \Session::flash("msg", "s:تم تعديل مركبة ($violation->violation_number) بنجاح");
        return redirect(route('violation.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Violation  $violation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $violation = Viloation::findOrFail($id);
        $violation->delete();
        \Session::flash("msg", "w:تم حذف مركبة ($car->name) بنجاح");
        return redirect()->route('violation.index');
    }
}
