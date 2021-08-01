<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Delegate;
use App\Http\Controllers\Controller;

use App\Models\Delegate;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.delegate');
    }
      public function create()
    {   
       // $countries = Country::all();
        return view('delegate.neworder');
    }

}
