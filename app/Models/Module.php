<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_id',
        'title',
        'slug',
        'duration',
        'number_of_lesson',
        'number_of_quiz',
        'number_of_attachment',
        'number_of_video',
        'order',
        'status',
    ];
    public function course()
    {
        return $this->belongsTo(Course::class);
    }
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
}

