<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table = 'san_phams';
    protected $fillable = [
        'tenLoaiSanPham',
        'slugLoaiSanPham',
        'tinhTrang',
    ];

}
