<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Teacher extends Model
{
    //
    protected $fillable = [
        'name', 'nip', 'email', 'phone', 'address', 
        'birth_date', 'gender', 'photo', 'education', 
        'join_date', 'is_active'
    ];

    protected $casts = [
        'birth_date' => 'date',
        'join_date' => 'date',
        'is_active' => 'boolean'
    ];

    public function classes(): HasMany
    {
        return $this->hasMany(ClassModel::class);
    }
}
