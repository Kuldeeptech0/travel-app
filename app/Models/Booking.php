<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'package_id',
        'customer_name',
        'email',
        'phone',
        'travel_date',
        'number_of_people'
    ];

    protected $casts = [
        'travel_date' => 'date',
        'number_of_people' => 'integer'
    ];

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
