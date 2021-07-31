<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class themMoiSanPhamRequest extends FormRequest
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
            'tenSanPham'           => 'required|min:7|max:50|unique:san_phams,tenSanPham',
            'slugTenSanPham'       => 'required',
            'hinhAnh'              => 'required',
            'moTaNgan'             => 'required',
            'moTaDai'              => 'required',
            'loaiSanPham_id'       => 'required|exists:loai_san_phams,id',
            'trongLuong'           => 'required|numeric|min:0',
            'giaKhuyenMai'         => 'numeric|min:0',
            'giaBan'               => 'required|numeric|min:0',
            'tinhTrang'            => 'required|boolean',
        ];
    }
    public function messages()
    {
        return[
            'required'              => ':attribute không được để trống',
            'unique'                => ':attribute đã tồn tại',
            'max'                   => ':attribute quá giới hạn ký tự',
            'boolean'               => ':attribute nhập sao định dạn',
            'dimensions'            => ':attribute không được để trống hoặc quá nhỏ',
            'exists'                => ':attribute không tồn tại',
        ];
    }

    public function attributes()
    {
        return[
            'tenSanPham'            => 'Tên Loại Sản Phẩm',
            'slugTenSanPham'        => 'Slug Tên Sản Phẩm',
            'hinhAnh'               => 'Hình Ảnh Sản Phẩm',
            'moTaNgan'              => 'Mô Tả Ngắn Sản Phẩm',
            'moTaDai'               => 'Mô Tả Dài Sản Phẩm',
            'loaiSanPham_id'        => 'Loại Sản Phẩm',
            'trongLuong'            => 'Trọng Lượng Sản Phẩm',
            'giaKhuyenMai'          => 'Giá Khuyến Mãi Sản Phẩm',
            'giaBan'                => 'Giá Bán Sản Phẩm',
            'tinhTrang'             => 'Tình Trạng Loại Sản Phẩm',
        ];
    }
}
