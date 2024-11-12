<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'status'
    ];

    protected $attributes = [
        'status' => 'new'
    ];

    const STATUSES = [
        'new',
        'contacted',
        'qualified',
        'converted',
        'lost'
    ];

    public function scopeNew($query)
    {
        return $query->where('status', 'new');
    }

    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }
}
