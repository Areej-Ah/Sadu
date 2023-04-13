<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $table    = 'services';
	protected $fillable = [
		'name_ar',
		'name_en',
		'icon',
        'description_ar',
        'description_en'

	];
}
