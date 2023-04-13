<?php

namespace App\Model;
use App\Model\Country;
use Illuminate\Database\Eloquent\Model;

class City extends Model {

	protected $table    = 'cities';
	protected $fillable = [
		'name_ar',
        'name_en',
        'country_id',
	];



    public function country() {
        return $this->belongsTo(Country::class, 'country_id');
    }

}