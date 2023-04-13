<?php

namespace App\Model;
use App\Model\City;
use App\Model\Country;

use Illuminate\Database\Eloquent\Model;

class State extends Model {

	protected $table    = 'states';
	protected $fillable = [
		'name_ar',
        'name_en',
        'city_id',
        'country_id',
	];



    public function city() {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function country() {
        return $this->belongsTo(Country::class, 'country_id');
    }

}