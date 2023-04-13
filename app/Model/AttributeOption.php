<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AttributeOption extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name_ar',
        'name_en',
        'code',
        'attribute_id',
    ];


    /**
     * Get the attribute that owns the attribute option.
     */
    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
