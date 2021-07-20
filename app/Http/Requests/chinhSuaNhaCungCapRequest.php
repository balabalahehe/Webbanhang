<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class chinhSuaNhaCungCapRequest extends FormRequest
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
            'idNhaCungCap'       =>'required|min:0',
            'tenNhaCungCap'      =>'required|min:3|max:50|unique:nha_cung_caps,tenNhaCungCap,' . $this->idNhaCungCap,
            'diaChi'             =>'required|min:7|max:50',
            'soDienThoai'        =>'required|min:9|max:12',
            'email'              =>'required|min:7|max:50',
            'tinhTrang'          =>'required|boolean',
            'tenNguoiDaiDien'    =>'min:3|max:50|',
        ];
    }
    public function messages()
    {
        return [
           'required'     =>':attribute không được để trống',
           'min'          =>':attribute chưa đủ yêu cầu kí tự',
           'max'          =>':attribute quá giới hạn kí tự ',
           'boolean'      =>':attribute đã nhập sai định dạng',
        ];
    }
    public function attributes()
    {
        return [
            'idNhaCungCap'   =>'Id',
            'tenNhaCungCap'  =>'Tên nhà cung cấp',
            'diaChi'         =>'Địa chỉ nhà cung cấp',
            'soDienThoai'    =>'Số điện thoại nhà cung cấp',
            'email'          =>'Email nhà cung cấp',
            'tinhTrang'      =>'Tình trạng nhà cung cấp',
            'tenNguoiDaiDien'=>'Tên người đại diện',
        ];
    }
}
