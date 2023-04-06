<?php

namespace App\Http\Controllers\Elearning;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Course;
use Illuminate\Support\Str;

class ModuleController extends Controller
{
    public function modules()
    {
        $modules = Module::orderBy('order', 'desc')->get();
        return view('elearning/modules/index', compact('modules'));
    }
    // create module to show a single module and its related lessons
    public function showModule($id)
    {
        $module = Module::find($id);
        $lessons = Lesson::where('module_id', $id)->orderBy('order', 'desc')->get();
        return view('elearning/modules/show', compact('module', 'lessons'));
    }

    
    // Create a method to show create module form
    public function createModule()
    {
        $courses = Course::orderBy('order', 'desc')->get();
        return view('elearning/modules/create', compact('courses'));
    }

    // Create a method to store module in database using module model and validate the data from module migration file, some field are nullable and slug should be generate from title and appending its id
    public function storeModule(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'course_id' => 'required',
        ]);
        $module = new Module([
            $module->course_id = $request->course_id,
            'title' => $request->title,
            'slug' => Str::slug($request->slug),
            'duration' => $request->duration,
            'number_of_lesson' => $request->number_of_lesson,
            'number_of_quiz' => $request->number_of_quiz,
            'number_of_attachment' => $request->number_of_attachment,
            'number_of_video' => $request->number_of_video,
            'order' => $request->order,
            'status' => $request->status,
        ]);
        $module->save();
        return redirect('/elearning/modules')->with('success', 'Module saved!');
    }
// Create a method to show edit module form
    public function editModule($id)
    {
        $module = Module::find($id);
        $courses = Course::orderBy('order', 'desc')->get();
        return view('elearning/modules/edit', compact('module', 'courses'));
    }

    // Create a method to update module in database using module model and validate the data from module migration file, some field are nullable and slug should be generate from title and appending its id
    public function updateModule(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'course_id' => 'required'
        ]);
        $module = Module::find($id);
        $module->course_id = $request->course_id;
        $module->title = $request->title;
        $module->slug = Str::slug($request->slug);
        $module->duration = $request->duration;
        $module->number_of_lesson = $request->number_of_lesson;
        $module->number_of_quiz = $request->number_of_quiz;
        $module->number_of_attachment = $request->number_of_attachment;
        $module->number_of_video = $request->number_of_video;
        $module->order = $request->order;
        $module->status = $request->status;
        $module->save();
        return redirect('/elearning/modules')->with('success', 'Module updated!');
    }
    // Create a method to delete module in database, before delete check the module is exist and it has any lesson or not, if lesson is present then delete the lesson first then delete the module
    public function deleteModule($id)
    {
        $module = Module::find($id);
        $module->delete();
        return redirect('/elearning/modules')->with('success', 'Module deleted!');
    }
}