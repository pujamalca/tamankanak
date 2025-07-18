<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ClassModel extends Model
{
    //
    protected $table = 'classes';
    
    protected $fillable = [
        'name', 'level', 'capacity', 'teacher_id', 
        'academic_year', 'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class);
    }

    public function students(): HasMany
    {
        return $this->hasMany(Student::class, 'class_id');
    }

    public function getCurrentStudentCountAttribute()
    {
        return $this->students()->where('status', 'active')->count();
    }

    public function getAvailableCapacityAttribute()
    {
        return $this->capacity - $this->current_student_count;
    }
}
