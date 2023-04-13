<?php

namespace App\Model;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model {

	protected $table    = 'shippings';
	protected $fillable = [
		'name_ar',
		'name_en',
		'active',
		'lat',
		'lng',
        'logo',
        'user_id',
	];



	public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

}