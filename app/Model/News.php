<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table    = 'news';
	protected $fillable = [
		'title_ar',
        'title_en',
        'text_ar',
        'text_en',
        'image',
        'active',
	];
}
