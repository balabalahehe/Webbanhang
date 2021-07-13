<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table = 'san_phams';
    protected $fillable = [
        'tenSanPham',
        'slugTenSanPham',
        'hinhAnh',
        'moTaNgan',
        'moTaDai',
        'loaiSanPham_id',
        'trongLuong',
        'giaKhuyenMai',
        'giaBan',
        'tinhTrang',
    ];

}