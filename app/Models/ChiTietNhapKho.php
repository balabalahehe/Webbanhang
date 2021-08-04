<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChiTietNhapKho extends Model
{
    protected $table = 'chi_tiet_nhap_khos';
    protected $fillable = [
        'sanPham_id',
        'soLuong',
        'nhaCungCap_id',
        'donGiaNhap',
        'is_congNo',
        'hoaDon',
    ];

}
