<?php

namespace App\Model;;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table    = 'customers';
	protected $fillable = [
		'name_ar',
		'name_en',
		'logo',
        'show'

	];
}
