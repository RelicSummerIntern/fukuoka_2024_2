<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unchi extends Model
{
    use HasFactory;
    // Userモデルの例
    protected $fillable = [
        'name',
        'email',
        'self_intro',
        'want_work',
        'now_work',
        'want_money',
        'want_place',
        'now_place',
        'use_lang',
    ];

}
