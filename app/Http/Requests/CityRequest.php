<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\City;

class CityRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'english_name' => 'required|max:255',
            'status' => 'required:' . City::STATUS_ACTIVE . ',' . City::STATUS_HIDDEN .',' .
            City::STATUS_DRAFT,
        ];
    }
    public function messages()
    {
        return [
        'name.required' => 'يجب إدخال الإسم',
        'english_name.required' => 'يجب إدخال باللغة الإنجليزية',
        'status.required' => 'يجب إدخال القيمة',
        ];
    }
}
