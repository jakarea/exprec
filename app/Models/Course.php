<?php

namespace App\Models;

use App\Models\Courselog;
use App\Models\Enrollment;
use App\Models\CourseActivity;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'categories',
        'thumbnail',
        'duration',
        'short_description',
        'long_description',
        'number_of_module',
        'number_of_lesson',
        'number_of_quiz',
        'number_of_attachment',
        'number_of_video',
        'status',
    ];
    public function modules()
    {
        return $this->hasMany(Module::class);
    }
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class, 'course_id', 'id');
    }
    public function courseActivities()
    {
        return $this->hasMany(CourseActivity::class, 'course_id', 'id');
    }

    public static function getProgress($user_id, $course_id)
    {
        $courselogs = CourseActivity::where('user_id', $user_id)
                                     ->where('course_id', $course_id)
                                     ->where('is_completed', 1)
                                     ->count();
        $total = Courselog::where('course_id', $course_id)->count();
        if ($total == 0) {
            return 0;
        }

        $enrollment = Enrollment::where('user_id', $user_id)
                                ->where('course_id', $course_id)
                                ->first();
        if ($enrollment) {
            $enrollment->progress = round(($courselogs / $total) * 100);
            $enrollment->save();
        }

        return round(($courselogs / $total) * 100);
    }    
    
}
