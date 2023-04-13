<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    protected $table    = 'investments';
	protected $fillable = [
        'description_ar',
        'description_en',
        'investment_field_ar',
        'investment_field_en'

	];
}
