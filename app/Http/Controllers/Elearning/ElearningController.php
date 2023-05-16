<?php

namespace App\Http\Controllers\Elearning;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Enrollment;

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
        $enrolments = Enrollment::where('user_id', auth()->user()->id)->get();
        return view('course/enrolments',compact('enrolments'));
    }

    public function category($category)
    {
        // request Developement
        $category = str_replace('-', ' ', strtoupper($category));

        $courses = Course::where('categories', 'LIKE', "%{$category}%")->orderBy('id', 'desc')->with('enrollments')->paginate(12);

        return view('course/index', compact('courses'));
    }
    
}
