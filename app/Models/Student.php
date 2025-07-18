<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
    //
    protected $fillable = [
        'registration_number', 'name', 'nickname', 'birth_date',
        'birth_place', 'gender', 'religion', 'address', 'photo',
        'class_id', 'admission_date', 'status'
    ];

    protected $casts = [
        'birth_date' => 'date',
        'admission_date' => 'date'
    ];

    public function class(): BelongsTo
    {
        return $this->belongsTo(ClassModel::class, 'class_id');
    }

    public function parents(): HasMany
    {
        return $this->hasMany(ParentModel::class);
    }

    public function getAgeAttribute()
    {
        return $this->birth_date->age;
    }
}
