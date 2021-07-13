<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class themMoiLoaiSanPhamRequest extends FormRequest
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
            'tenLoaiSanPham'     =>'required|min:3|max:50|unique:loai_san_phams,tenLoaiSanPham',
        ];
    }
    public function messages()
    {
        return [
           'required'     =>':attribute không được để trống',
           'unique'       =>':attribute đã tồn tại',
        ];
    }
    public function attributes()
    {
        return [
            'tenLoaiSanPham' =>'Tên Loại Sản Phẩm',
        ];
    }
}
