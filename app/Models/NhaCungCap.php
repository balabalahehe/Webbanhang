<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NhaCungCap extends Model
{
    protected $table = 'nha_cung_caps';
    protected $fillable  = [
        'tenNhaCungCap',
        'diaChi',
        'soDienThoai',
        'email',
        'tinhTrang',
        'tenNguoiDaiDien',
    ];
}
