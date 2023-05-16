<?php

namespace App\Models;

use App\Jobs\UploadVimeoVideo;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lesson extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'slug',
        'video_url',
        'module_id',
        'course_id',
        'duration',
        'attachment',
        'attachment_name', 
        'short_description',
        'order',
        'status',
    ];
    public function module()
    {
        return $this->belongsTo(Module::class);
    }
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public static function getAttachments($course_id)
    {
        $attachments = Lesson::where('course_id', $course_id)->get();
        return $attachments;
    }

    public function getVideoUploadProgressAttribute()
    {
        $job = $this->vimeoUploadJob();
        if ($job && $job->progress() !== null) {
            return $job->progress();
        }
        return 0;
    }

    private function vimeoUploadJob()
    {
        $job = \DB::table('jobs')->where('payload', 'like', '%"lessonId":'.$this->lessonId.'%')->first();
        if ($job) {
            return unserialize($job->payload)->lesson;
        }
        return null;
    }
    

}
