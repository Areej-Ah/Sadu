<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model {

	protected $table    = 'brands';
	protected $fillable = [
		'name_ar',
		'name_en',
		'logo',
	];

}