<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Dealer;

use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {   //dd(22);
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //dd(20);
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'phone' => 'required|min:11|numeric',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);
        $file1 = $request->file('logo');

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'type' => 'dealer',
        ]);
       // dd($user->id);
        $dealer = Dealer::create([
           'phone2' => $request->post('phone2'),
           'logo' => $file1->store('/', ['disk' => 'uploads']),
           'country_id' => $request->post('country_id'),
           'city_id' => $request->post('city_id'),
           'area_id' => $request->post('area_id'),
           'method' => $request->post('method'),
           'commission' => $request->post('commission'),
           'user_id'=>  $user->id,
           'status' => 'active',
        ]);
        //dd('ok');
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
