<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullName',
        'course_id',
        'courseDate',
        'message'
    ];


    public function course () {
        return $this->hasOne(Course::class, 'id', 'course_id');
    }
}
