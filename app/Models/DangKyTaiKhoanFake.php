<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DangKyTaiKhoanFake extends Model
{
    protected $table = 'dang_ky_tai_khoan_fakes';

    protected $fillable = [
        'user_name',
        'password',
    ];
}
