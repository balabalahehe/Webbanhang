<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LichSuThaoTac extends Model
{
    protected $table = 'lich_su_thao_tacs';

    protected $fillable = [
        'page',
        'action',
        'content',
        'user_id',
    ];
}
