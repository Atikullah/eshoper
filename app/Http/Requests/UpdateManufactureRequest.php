<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateManufactureRequest extends FormRequest
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
            'manufactures_name' => 'required|string|min:2|max:50',
            'table_id' => 'required',
            'description' => 'required|string|min:5|max:5000',
            'publication_status' => 'required'
        ];
    }
}
