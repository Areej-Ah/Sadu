<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AttributeFamily extends Model
{
    protected $fillable = [
        'code',
        'name_ar',
        'name_en',
        'status'
    ];



    public function attributes()
    {
        return $this->hasMany(Attribute::class);
    }

}
