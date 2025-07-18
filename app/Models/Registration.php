<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    //
    protected $fillable = [
        'registration_code', 'child_name', 'birth_date', 'birth_place',
        'gender', 'parent_name', 'parent_phone', 'parent_email',
        'address', 'desired_class', 'status', 'notes'
    ];

    protected $casts = [
        'birth_date' => 'date'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($registration) {
            $registration->registration_code = 'REG' . date('Ymd') . str_pad(static::count() + 1, 4, '0', STR_PAD_LEFT);
        });
    }
}
