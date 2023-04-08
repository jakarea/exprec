<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
