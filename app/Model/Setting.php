<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model {

	protected $table    = 'settings';
	protected $fillable = [
		'sitename_ar',
		'sitename_en',
		'logo',
		'icon',
		'email',
		'description_en',
		'keywords',
		'status',
		'message_maintenance',
		'main_lang',
        'description_ar',
        'message_ar',
        'message_en',
        'vision_ar',
        'vision_en',
        'values_ar',
        'values_en',
        'team_experinces_ar',
        'team_experinces_en',
        'location_ar',
        'location_en',
        'phone',
        'mobile',
        'logo2',
        'video',
        'number_of_beneficiaries',
        'number_of_employees',
        'number_of_projects',
        'employment_email',
        'slogan_en',
        'slogan_ar'
	];

}
