<?php

namespace App\Http\Controllers\Elearning;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Course;
use Illuminate\Support\Str;
use App\Models\Lesson;
use Vimeo\Laravel\Facades\Vimeo;
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
        $request->validate([
            'title' => 'required',
            'module_id' => 'required',
            'course_id' => 'required',
            'duration' => 'required',
            'attachment' => 'nullable|mimes:doc,docx,pdf,ppt,pptx,xls,xlsx,jpg,jpeg,png|max:5000000', // max 5MB
            'video_file' => 'nullable|mimetypes:video/mp4|max:5000000', // max 5MB
        ]);
        
        // return $request->all();     

        $lesson = new Lesson([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'module_id' => $request->module_id,
            'course_id' => $request->course_id,
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
            $destinationPath = public_path('/assets/images/lesson');
            $image->move($destinationPath, $name);
            $lesson->attachment = $name;
        }

        if ($request->hasFile('video_file')) {
            // upload video into vimeo through API
            $response = Vimeo::upload(
                $request->file('video_file')->getPathname(),
                [
                    'name' => $request->file('video_file')->getClientOriginalName(),
                    'description' => 'Uploaded from my Laravel application',
                    'privacy' => [
                        'view' => 'nobody',
                    ],
                ]
            );
            
            $lesson->video_url = $response;
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

    public function updateLesson(Request $request, $slug)
    {

        // return $request->all();

        $request->validate([
            'attachment' => 'nullable|mimes:doc,docx,pdf,ppt,pptx,xls,xlsx,jpg,jpeg,png|max:5000000', // max 5MB
            'video_file' => 'nullable|mimetypes:video/mp4|max:5000000', // max 5MB
        ]);

        // return $request->all();

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
            $oldThumbnail = public_path('/assets/images/lesson'.$lesson->attachment);
            if (file_exists($oldThumbnail)) {
                @unlink($oldThumbnail);
            }
            $image = $request->file('attachment');
            $name = $lesson->slug.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/assets/images/lesson');
            $image->move($destinationPath, $name);
            $lesson->attachment = $name;
        }
        
        if ($request->hasFile('video_file')) {
            // upload video into vimeo through API
            $response = Vimeo::upload(
                $request->file('video_file')->getPathname(),
                [
                    'name' => $request->file('video_file')->getClientOriginalName(),
                    'description' => 'Uploaded from my Laravel application',
                    'privacy' => [
                        'view' => 'nobody',
                    ],
                ]
            );
            
            $lesson->video_url = $response;
        } 

        $lesson->save();
        return redirect('admin/elearning/lessons')->with('success', 'Lesson updated!');
    }

    // create a method to delete lesson from database
    public function deleteLesson($slug){
         
        $lesson = Lesson::where('slug', $slug)->first();
        // delete attachment
        $oldThumbnail = public_path('/assets/images/lesson'.$lesson->attachment);
        if (file_exists($oldThumbnail)) {
            @unlink($oldThumbnail);
        }
        $lesson->delete();

        return redirect('admin/elearning/lessons')->with('success', 'Lesson deleted!');
    }
}
