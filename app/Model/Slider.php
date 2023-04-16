<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $table    = 'sliders';
	protected $fillable = [
		'title_ar',
        'title_en',
        'text_ar',
        'text_en',
        'image',
        'active',
	];
}
