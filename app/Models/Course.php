<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'slug',
        'course_outline',
        'image',
        'description'
    ];
    protected $casts = [
        'course_outline' => 'array',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($course) {
            $course->slug = self::createUniqueSlug($course->title);
        });
    }

    private static function createUniqueSlug($name)
    {
        // Generate initial slug
        $slug = Str::slug($name);
        $originalSlug = $slug;
        $count = 1;

        // Check for existing slugs and adjust if necessary
        while (Course::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        return $slug;
    }
}
