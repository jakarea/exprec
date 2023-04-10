<?php

namespace App\Models;

use App\Models\User;
use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'progress',
        'course_id',
        'user_id',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getProgressAttribute($value)
    {
        return $value . '%';
    }

    public function setProgressAttribute($value)
    {
        $this->attributes['progress'] = $value;
    }

    // count courselog by user_id and course_id and return progress
    public function getProgress($user_id, $course_id)
    {
        $courselogs = Courselog::where('user_id', $user_id)->where('course_id', $course_id)->get();
        $total = $courselogs->count();
        $completed = $courselogs->where('is_completed', 1)->count();
        $progress = $completed / $total * 100;
        return $progress;
    }
}
