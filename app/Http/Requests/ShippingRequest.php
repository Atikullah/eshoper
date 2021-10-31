<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShippingRequest extends FormRequest
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
            'company_name' => 'required|string|min:1|max:100',
            'shipping_name'         => 'required|string|min:1|max:50',
            'shipping_address'      => 'required|string|min:1|max:200',
            'address_optional'  => 'required|string|min:1|max:200',
            'shipping_city'         => 'required|string|min:1|max:50',
            'shipping_email'        => 'required|email|max:255|unique:shippings',
            'shipping_number'       => 'required|string|digits_between:2,14'

        ];
    }
}
