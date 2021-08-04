<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tmpChiTietNhapKho extends Model
{
    protected $table = 'tmp_chi_tiet_nhap_khos';
    protected $fillable = [
        'sanPham_id',
        'soLuong',
        'nhaCungCap_id',
        'donGiaNhap',
        'is_congNo',
    ];

    public function nhaCungCap()
    {
        return $this->belongsTo('\App\Models\NhaCungCap', 'nhaCungCap_id', 'id');
    }

    public function sanPham()
    {
        return $this->belongsTo('\App\Models\SanPham', 'sanPham_id', 'id');
    }
}
