<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'package_id',
        'name',
        'category',
        'city',
        'city_code',
        'duration',
        'adult_price',
        'child_price',
        'pax',
        'short_description',
        'description',
        'thumbnail'
    ];

}
