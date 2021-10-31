<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Customer_sinupRequest extends FormRequest
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
            'name' => 'required|string|min:1|max:50',
            'email' => 'required|email|max:255|unique:customers',
            'number' => 'required|digits_between:1,15|unique:customers',
            'password' => 'required|string|max:8|min:4',
            'Conform_password' => 'required|same:password'
        ];
    }
}
