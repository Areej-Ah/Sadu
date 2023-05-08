<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table    = 'photos';
    protected $fillable = [
        'title_ar',
        'title_en',
        'image',
        'active',
    ];
}
