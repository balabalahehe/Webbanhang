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
    ];
}
