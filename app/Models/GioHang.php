<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GioHang extends Model
{
    protected $table = 'gio_hangs';
    protected $fillable = [
        'id_sanPham',
        'ten_sanPham',
        'hinhAnh_sanPham',
        'soLuong',
        'donGia',
        'user_id',
    ];
}
