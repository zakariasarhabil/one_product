<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestOrder extends FormRequest
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

                'name' => 'required',
                'number' => 'required',
                'address' => 'required',
                'city' => 'required',
        ];
    }

    public function messages()
{
    return [
        'name.required' => 'المرجو إدخال الإسم الكامل',
        'number.required' => ' المرجو إدخال رقم الهاتف',
        'address.required' => ' المرجو إدخال العنوان',
        'city.required' => ' المرجو إدخال المدينة',
    ];
}
}
