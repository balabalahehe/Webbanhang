<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class themTaiKhoanRequest extends FormRequest
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
            'fullname'      => 'required|max:50',
            'password'      => 'required',
            'phonenumber'   => 'required|max:15',
            'email'         => 'required',
        ];
    }
}
