<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ParentModel extends Model
{
    //
    protected $table = 'parents';
    
    protected $fillable = [
        'student_id', 'type', 'name', 'nik', 'phone',
        'email', 'occupation', 'education', 'address'
    ];

    public function student(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }
}
