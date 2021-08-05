<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class themMoiTaiKhoanAdmin extends FormRequest
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
            'hovaten'   => 'required|max:100',
            'email'     => 'required|email|unique:admins,email',
            'password'  => 'required|max:100',
            'role'      => 'required|max:5',
        ];
    }

    public function messages()
    {
        return [
            'required'  => ':attribute không được để trống',
            'max'       => ':attribute tối đa được 50 ký tự',
            'email'       => ':attribute phải là email',
        ];
    }

    public function attributes()
    {
        return [
            'hovaten'  => 'Họ và tên ',
            'email'    => 'Email ',
            'password' => 'Mật khẩu ',
        ];
    }
}
