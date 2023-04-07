<?php

namespace App\Http\Controllers\Elearning;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Course;
use Illuminate\Support\Str;
use App\Models\Lesson;
class LessonController extends Controller
{
    //show all lessons
    public function lessons()
    { 
        $lessons = Lesson::orderBy('order', 'asc')->paginate(12);
        return view('elearning/lessons/index', compact('lessons'));
    }

   // create a method to show create lesson form
    public function createLesson()
    {
        $courses = Course::orderBy('id', 'desc')->get();
        $modules = Module::orderBy('order', 'asc')->get();
        return view('elearning/lessons/create', compact('courses','modules'));
    }

    //create a method to store lesson on database
    public function storeLesson(Request $request)
    {
        // return $request->all();

        $request->validate([
            'title' => 'required',
            'module_id' => 'required',
            'course_id' => 'required',
            'video_url' => 'required',
            'duration' => 'required',
        ]);
        $lesson = new Lesson([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'module_id' => $request->module_id,
            'course_id' => $request->course_id,
            'video_url' => $request->video_url,
            'duration' => $request->duration, 
            'attachment_name' => $request->attachment_name,
            'short_description' => $request->short_description,
            'order' => $request->order,
            'status' => $request->status,
        ]);
        $lesson->save();
        $lesson->slug = $lesson->slug . '-' . $lesson->id;
         //if attachment is valid then save it
        if ($request->hasFile('attachment')) {
            $image = $request->file('attachment');
            $name = $lesson->slug.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/lesson/images');
            $image->move($destinationPath, $name);
            $lesson->attachment = $name;
        }
        
        $lesson->save();
        $lesson->slug = $lesson->slug . '-' . $lesson->id;
        $lesson->save();
        return redirect('admin/elearning/lessons')->with('success', 'Lesson saved!');
    }

    // create a method to show edit lesson form
    public function editLesson($slug)
    {
        // $lesson = Lesson::find($id);
        $lesson = Lesson::where('slug', $slug)->first();
        $courses = Course::orderBy('id', 'desc')->get();
        $modules = Module::orderBy('order', 'asc')->get();
        return view('elearning/lessons/edit', compact('lesson','modules','courses'));
    }
    //create a method to update lesson on database

    public function updateLesson(Request $request, $slug){

        // return $request->all();

        $request->validate([
            'title' => 'required',
            'module_id' => 'required',
            'course_id' => 'required',
            'video_url' => 'required',
            'duration' => 'required',
        ]);

        $lesson = Lesson::where('slug', $slug)->first();
        $lesson->title = $request->title;
        $lesson->slug = Str::slug($request->title);
        $lesson->module_id = $request->module_id;
        $lesson->course_id = $request->course_id;
        $lesson->video_url = $request->video_url;
        $lesson->duration = $request->duration;
        $lesson->attachment = $request->attachment;
        $lesson->attachment_name = $request->attachment_name;
        $lesson->short_description = $request->short_description;
        $lesson->order = $request->order;
        $lesson->status = $request->status;
        $lesson->save();
        $lesson->slug = $lesson->slug . '-' . $lesson->id;
         //if attachment is valid then save it
        if ($request->hasFile('attachment')) {
            //delete old attachment
            $oldThumbnail = public_path('/images/'.$lesson->attachment);
            if (file_exists($oldThumbnail)) {
                @unlink($oldThumbnail);
            }
            $image = $request->file('attachment');
            $name = $lesson->slug.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
        }
        // $lesson->attachment = $name;
        $lesson->save();
        return redirect('admin/elearning/lessons')->with('success', 'Lesson updated!');
    }

    // create a method to delete lesson from database
    public function deleteLesson($slug){
         
        $lesson = Lesson::where('slug', $slug)->delete(); 
        return redirect('admin/elearning/lessons')->with('success', 'Lesson deleted!');

    }
}
