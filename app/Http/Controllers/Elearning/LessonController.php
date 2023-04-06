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
        $lessons = Lesson::orderBy('order', 'desc')->get();
        return view('elearning/lessons/index', compact('lessons'));
    }

   // create a method to show create lesson form
    public function createLesson()
    {
        return view('elearning/lessons/create');
    }

    //create a method to store lesson on database
    public function storeLesson(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'module_id' => 'required',
            'course_id' => 'required',
            'video_url' => 'required',
            'duration' => 'required',
        ]);
        $lesson = new Lesson([
            'title' => $request->title,
            'slug' => Str::slug($request->slug),
            'module_id' => $request->module_id,
            'course_id' => $request->course_id,
            'video_url' => $request->video_url,
            'duration' => $request->duration,
            'attachment' => $request->attachment,
            'attachment_name' => $request->attachment_name,
            'short_description' => $request->short_description,
            'order' => $request->order,
            'status' => $request->status,
        ]);
        $lesson->save();
        return redirect('/elearning/lessons')->with('success', 'Lesson saved!');
    }

    // create a method to show edit lesson form
    public function editLesson($id)
    {
        $lesson = Lesson::find($id);
        return view('elearning/lessons/edit', compact('lesson'));
    }
    //create a method to update lesson on database

    public function updateLesson(Request $request){
        $request->validate([
            'title' => 'required',
            'module_id' => 'required',
            'course_id' => 'required',
            'video_url' => 'required',
            'duration' => 'required',
        ]);
        $lesson = Lesson::find($request->id);
        $lesson->title = $request->title;
        $lesson->slug = Str::slug($request->slug);
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
        return redirect('/elearning/lessons')->with('success', 'Lesson updated!');
    }

    // create a method to delete lesson from database
    public function deleteLesson($id){
        
        $lesson = Lesson::find($id);
        $lesson->delete();
        return redirect('/elearning/lessons')->with('success', 'Lesson deleted!');

    }
}
