<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullName',
        'email',
        'phoneNumber',
        'country',
        'agerange',
        'course_id',
        'courseDate'
    ];

    public function course () {
        return $this->hasOne(Course::class, 'id', 'course_id');
    }
}
