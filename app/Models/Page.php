<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //
    protected $fillable = [
        'title', 'slug', 'content', 'featured_image', 'is_published', 'order'
    ];

    protected $casts = [
        'is_published' => 'boolean'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($page) {
            $page->slug = Str::slug($page->title);
        });
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }
}
