<?php

namespace App\Http\Controllers\Elearning;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class ElearningController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('id', 'desc')->with('enrollments')->paginate(12);
        return view('course/index', compact('courses'));
    }

    public function course($slug)
    {
        $course = Course::where('slug', $slug)->with('enrollments', 'courseActivities')->first();
        // return $course;
        return view('elearning/courses/show', compact('course'));
    }
    public function mylearning()
    {
        return view('course/mylearning-2');
    }
    public function suggested()
    {
        return view('course/suggested');
    }
}
