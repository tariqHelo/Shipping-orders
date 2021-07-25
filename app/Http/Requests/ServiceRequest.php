<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Service;

class ServiceRequest extends FormRequest
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
            'type' => 'required:' . Service::STATUS_LOCAL . ',' . Service::STATUS_INTERNATIONAL ,
            'status' => 'required:' . Service::STATUS_ACTIVE . ',' . Service::STATUS_HIDDEN .',' .
            Service::STATUS_DRAFT,
        ];
    }
}
