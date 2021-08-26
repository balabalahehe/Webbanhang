<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class homeSlide extends Model
{
    protected $table = 'home_slides';
    protected $fillable = [
        'title',
        'subtitle',
        'des',
        'href',
        'btn',
        'url',
        'where_view',
    ];

    const VIEW_SLIDE_MAIN = 1;
    const VIEW_SLIDE_SUB  = 2;
    const VIEW_NOT        = 0;
}
