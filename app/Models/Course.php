<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    
}
