<?php

namespace App\Http\Controllers\Elearning;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Module;

class CourseController extends Controller
{
    //create a method to show all courses withe its modules and lessons
    public function courses()
    {
        $courses = Course::orderBy('order', 'desc')->get();
        return view('elearning/courses/index', compact('courses'));
    }

    // Create a method to show create course form
    public function createCourse()
    {
        return view('elearning/courses/create', compact('courses'));
    }

    // Create a method to store course in database using course model and follow the validation rules from migration file, generate unique slug from title and appending its id after save the course
    public function storeCourse(Request $request)
    {
        //validate thumbnail
        $request->validate([
            'title' => 'required',
            'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        //save course
        $course = new Course([
            'title' => $request->title,
            'slug' => Str::slug($request->slug),
            'duration' => $request->duration,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'categories' => implode(',',$request->categories),
            'number_of_module' => $request->number_of_module,
            'number_of_lesson' => $request->number_of_lesson,
            'number_of_quiz' => $request->number_of_quiz,
            'number_of_attachment' => $request->number_of_attachment,
            'number_of_video' => $request->number_of_video,
            'status' => $request->status,
        ]);
        $course->save();
        $course->slug = $course->slug . '-' . $course->id;
         //if thumbnail is valid then save it
        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $name = $course->slug.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
        }
        $course->thumbnail = $name;
        $course->save();
        return redirect('/elearning/courses')->with('success', 'Course saved!');
    }

    // Create a method to show edit course form and make sure course is exist by slug
    public function editCourse($slug)
    {
        $course = Course::where('slug', $slug)->first();
        if ($course) {
            return view('elearning/courses/edit', compact('course'));
        } else {
            return redirect('/elearning/courses')->with('error', 'Course not found!');
        }
    }

    // Create a method to update course
    public function updateCourse(Request $request, $slug)
    {
        //validate thumbnail
        $request->validate([
            'title' => 'required'
        ]);

        //save course
        $course = Course::where('slug', $slug)->first();
        $course->title = $request->title;
        $course->slug = Str::slug($request->slug);
        $course->duration = $request->duration;
        $course->short_description = $request->short_description;
        $course->long_description = $request->long_description;
        $course->categories = implode(',',$request->categories);
        $course->number_of_module = $request->number_of_module;
        $course->number_of_lesson = $request->number_of_lesson;
        $course->number_of_quiz = $request->number_of_quiz;
        $course->number_of_attachment = $request->number_of_attachment;
        $course->number_of_video = $request->number_of_video;
        $course->status = $request->status;
        $course->save();
        $course->slug = $course->slug . '-' . $course->id;
         //if thumbnail is valid then save it
        if ($request->hasFile('thumbnail')) {
            //delete old thumbnail
            $oldThumbnail = public_path('/images/'.$course->thumbnail);
            if (file_exists($oldThumbnail)) {
                @unlink($oldThumbnail);
            }
            $image = $request->file('thumbnail');
            $name = $course->slug.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
        }
        $course->thumbnail = $name;
        $course->save();
        return redirect('/elearning/courses')->with('success', 'Course saved!');
    }
    // show single course with joining its module and lessons
    public function showCourse($slug)
    {
        $course = Course::where('slug', $slug)->first();
        $modules = Module::where('course_id', $course->id)->get();
        $lessons = Lesson::where('course_id', $course->id)->get();
        if ($course) {
            return view('elearning/courses/show', compact('course', 'modules', 'lessons'));
        } else {
            return redirect('/elearning/courses')->with('error', 'Course not found!');
        }
    }

    // Create a method to delete course and make sure course is exist by slug and delete its thumbnail and ite related modules and lessons
    public function deleteCourse($slug)
    {
        $course = Course::where('slug', $slug)->first();
        if ($course) {
            //delete thumbnail
            $oldThumbnail = public_path('/images/'.$course->thumbnail);
            if (file_exists($oldThumbnail)) {
                @unlink($oldThumbnail);
            }
            //delete modules
            $modules = Module::where('course_id', $course->id)->get();
            foreach ($modules as $module) {
                //delete lessons
                $lessons = Lesson::where('module_id', $module->id)->get();
                foreach ($lessons as $lesson) {
                    //delete attachments
                    $attachments = Attachment::where('lesson_id', $lesson->id)->get();
                    foreach ($attachments as $attachment) {
                        $oldAttachment = public_path('/attachments/'.$attachment->file);
                        if (file_exists($oldAttachment)) {
                            @unlink($oldAttachment);
                        }
                        $attachment->delete();
                    }
                    
                    $lesson->delete();
                }
                $module->delete();
            }
            $course->delete();
            return redirect('/elearning/courses')->with('success', 'Course deleted!');
        } else {
            return redirect('/elearning/courses')->with('error', 'Course not found!');
        }
    }
}