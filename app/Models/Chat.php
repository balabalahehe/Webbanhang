<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $table = 'Chats';
    protected $fillable = [
        'content', 'user_id',
    ];
}
