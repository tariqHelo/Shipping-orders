<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Spending;
use Illuminate\Http\Request;

class SpendingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
       $spendings = Spending::all();
      return view('admin.spending.index')
      ->withSpendings($spendings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $cities = City::pluck('name', 'id');
        return view('admin.spending.create',[
        'spending' => new Spending()
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
        $spending = Spending::create($request->all());
        \Session::flash("msg", "s:تم إضافة فاتورة ($spending->bill) بنجاح");
        return redirect(route('spending.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Spending  $spending
     * @return \Illuminate\Http\Response
     */
    public function show(Spending $spending)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Spending  $spending
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $spending = Spending::findOrFail($id);
        return view('admin.country.edit', [
            'spending' => $spending,
           // 'cities' => $cities,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Spending  $spending
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {  
         $spending = Spending::findOrFail($id);
        $spending->update($request->all());
        \Session::flash("msg", "s:تم تعديل فاتورة ($spending->bill) بنجاح");
        return redirect(route('spending.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Spending  $spending
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $spending = Spending::findOrFail($id);
        $spending->delete();
        \Session::flash("msg", "w:تم حذف فاتورة ($spending->bill) بنجاح");
        return redirect()->route('spending.index');
    }
}
