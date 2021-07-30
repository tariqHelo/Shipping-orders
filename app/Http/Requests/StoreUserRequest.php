<?php

namespace App\Http\Requests;

use App\Models\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
       // abort_if(Gate::denies('user_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;

    }

    public function rules()
    {
        return [
            'name'     => ['required:'. User::NAME],
            'email' =>    ['required:'. User::EMAIL,'unique:users'],
            'password' => ['required:'. User::PASSWORD],
            'nationality'=> ['required'],
            'image'=> ['required'],
            'work_start'=> ['required'],
            'license'=> ['required'],
            'license_expiry'=> ['required'],
            'license_image'=> ['required'],
            'phone'=> ['required'],
            'id_number'=> ['required'],
            'id_expiry'=> ['required'],
            'id_image'=> ['required'],
            'passport'=> ['required'],
            'passport_expiry'=> ['required'],
            'passport_image'=> ['required'],
            'residence_expiry'=> ['required'],
            'residence_image'=> ['required'],
            'status'=> ['required'],
            'user_id'=> ['required'],
            'role_id'=> ['required'],
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'هذ الحقل مطلوب',
            'email.required' => 'هذ الحقل مطلوب',
            'passwordrequired' => 'هذ الحقل مطلوب',
            'nationality.required'=>'هذ الحقل مطلوب',
            'image.required'=>'هذ الحقل مطلوب',
            'work_start.required'=>'هذ الحقل مطلوب',
            'license.required'=>'هذ الحقل مطلوب',
            'license_expiry.required'=>'هذ الحقل مطلوب',
            'license_image.required'=>'هذ الحقل مطلوب',
            'phone.required'=>'هذ الحقل مطلوب',
            'id_number.required'=>'هذ الحقل مطلوب',
            'id_expiry.required'=>'هذ الحقل مطلوب',
            'id_image.required'=>'هذ الحقل مطلوب',
            'passport.required'=>'هذ الحقل مطلوب',
            'passport_expiry.required'=>'هذ الحقل مطلوب',
            'passport_image.required'=>'هذ الحقل مطلوب',
            'residence_expiry.required'=>'هذ الحقل مطلوب',
            'residence_image.required'=>'هذ الحقل مطلوب',
            'status.required'=>'هذ الحقل مطلوب',
            'user_id.required'=>'هذ الحقل مطلوب',
            'role_id.required'=>'هذ الحقل مطلوب',
  
        ];
    }
}
