<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoaiSanPham extends Model
{
    protected $table = 'loai_san_phams';

    protected $fillable = [
        'tenLoaiSanPham',
        'slugLoaiSanPham',
        'tinhTrang',
        'is_delete',
        'is_view_top',
        'is_view_left',
    ];

    const tinhTrang_Open  = 1;
    const tinhTrang_Close = 0;
}
