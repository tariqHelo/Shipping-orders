<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use App\Models\Employe;
use Illuminate\Support\Facades\Hash;

use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UsersController extends Controller
{
    public function index()
    { 
        
    //    abort_if(Gate::denies('user_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
      //  abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::all()->pluck('title', 'id');

        return view('admin.users.create', compact('roles'));
    }

    public function store(Request $request)
    { 
        $file1 = $request->file('image');
        $file2 = $request->file('id_image');
        $file3 = $request->file('passport_image');
        $file4 = $request->file('residence_image');

        $user = new User([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
        ]);
        $empoloye = new Employe([
            'nationality' => $request->post('nationality'),
           'image' => $file1->store('/', ['disk' => 'uploads']),
            'work_start' => $request->post('work_start'),
            'license' => $request->post('license'),
            'license_expiry' => $request->post('license_expiry'),
            'phone' => $request->post('phone'),
            'id_number' => $request->post('id_number'),
            'id_expiry' => $request->post('id_expiry'),
            'id_image' => $file2->store('/', ['disk' => 'uploads']),
            'passport' => $request->post('passport'),
            'passport_expiry' => $request->post('passport_expiry'),
            'passport_image' => $file3->store('/', ['disk' => 'uploads']),
            'residence_expiry' => $request->post('residence_expiry'),
           'residence_image' => $file4->store('/', ['disk' => 'uploads']),
            'delivery_commission' => $request->post('delivery_commission'),
            'receipt_ommission' => $request->post('receipt_ommission'),
            'user_id' => $user->id,
            'status' => $request->post('status', 'active'),
        ]);
        $empoloye->save();
        $user->save();
        $user->roles()->sync($request->input('roles', []));
         \Session::flash("msg", "تم إضافة المستخدم بنجاح");
        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
       //abort_if(Gate::denies('user_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $roles = Role::all()->pluck('title', 'id');

        $user->load('roles');

        return view('users.edit', compact('roles', 'user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());
        $user->roles()->sync($request->input('roles', []));
        \Session::flash("msg", "تم تعديل المستخدم بنجاح");

        return redirect()->route('users.index');

    }

    public function show(User $user)
    {
      abort_if(Gate::denies('user_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->load('roles');

        return view('users.show', compact('user'));
    }

    public function destroy(User $user)
    {
        abort_if(Gate::denies('user_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $user->delete();
        session()->flash("msg", "w: تم الحذف بنجاح");
        return back();

    }

    public function massDestroy(MassDestroyUserRequest $request)
    {
        User::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);

    }
}
