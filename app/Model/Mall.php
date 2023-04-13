<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Mall extends Model {

	protected $table    = 'malls';
	protected $fillable = [
		'name_ar',
		'name_en',
		'facebook',
		'twitter',
		'website',
		'email',
		'mobile',
		'address_en',
		'address_ar',
		'active',
		'lat',
		'lng',
		'logo',
	];

}