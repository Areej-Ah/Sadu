<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    protected $table    = 'social_media';
    protected $fillable = [
        'name_ar',
        'name_en',
        'link',
        'icon',
        'active',
    ];
}
