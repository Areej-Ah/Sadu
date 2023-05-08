<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table    = 'videos';
    protected $fillable = [
        'title_ar',
        'title_en',
        'video',
        'active',
    ];
}
