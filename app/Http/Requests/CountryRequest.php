<?php

namespace App\Http\Requests;
use App\Models\Country;

use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
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
            'cities*' => 'required|int|exists:cities,id',
            'status' => 'required:' . Country::STATUS_ACTIVE . ',' . Country::STATUS_HIDDEN .',' .
            Country::STATUS_DRAFT,
            // 'image' => 'nullable|image|dimensions:min_width=300,min_height=300',
            // 'price' => 'nullable|numeric|min:0',
            // 'sale_price' => 'nullable|numeric|min:0',
            // 'quantity' => 'nullable|int|min:0',
            // 'sku' => 'nullable|unique:products,sku',
            // 'width' => 'nullable|numeric|min:0',
            // 'height' => 'nullable|numeric|min:0',
            // 'length' => 'nullable|numeric|min:0',
            // 'weight' => 'nullable|numeric|min:0',
        ];
    }

    public function messages()
    {
        return [
            //'required' => 'الحقل :attribute مطلوب.',
        ];
    }
}
