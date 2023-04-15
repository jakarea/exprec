<?php
use Vimeo\Vimeo;
use App\Http\Controllers\EnrollmentsController;
use App\Http\Controllers\Elearning\CourseController;
use App\Http\Controllers\Elearning\LessonController;
use App\Http\Controllers\Elearning\ModuleController;
use App\Http\Controllers\Elearning\ElearningController;

// Route::prefix('elearning')->controller(ElearingController::class)->group(function () {   
//     Route::get('/', 'index');   
//     Route::get('/mylearning', 'mylearning');   
//     Route::get('/favorite', 'suggested');   
// });

Route::prefix('elearning')->middleware(['auth'])->controller(ElearningController::class)->group(function () {   
    Route::get('/', 'index');  
    Route::get('/courses/{slug}', 'course');
    Route::get('/mylearning', 'mylearning');   
    Route::get('/favorite', 'suggested');
});

Route::middleware(['auth'])->resource('enrollment', EnrollmentsController::class);

Route::middleware(['auth'])->get('/admin/testing', function () {

    $client = new Vimeo('{{ f3422373260b837a0326c40abd507e0ae721707a }}', '{{ /lcNhvt0rlnETwlrhPa/fmpWw0SU3wqLajoj9wu5QAkCgd+QkTUj9lPYpjOA5XP+pxZt4kIkBnSgH50cZqgKAJ/li0pSyLtVLA4mGTQlUJ3i8ayYvqC6g0LGh7HvYyu5 }}');

    $client->setToken('{{ 64ac29221733a4e2943345bf6c079948 }}');

    $video = $client->request('/videos/815578316', [], 'GET');
    dd($video);
});

Route::prefix('admin/elearning/courses')->middleware(['auth'])->controller(CourseController::class)->group(function () {   
    Route::get('/', 'courses');
    Route::get('/create', 'createCourse')->name('course_create'); 
    Route::post('/create', 'storeCourse')->name('course_store');
    Route::get('/{id}', 'showCourse');
    Route::get('/{id}/edit', 'editCourse')->name('course_edit');
    Route::post('/{id}/edit', 'updateCourse')->name('course_update');
    Route::delete('/{id}/destroy', 'deleteCourse');
    Route::post('/ajax/finish/lesson', 'ajaxFinishLesson')->name('ajax_finish_lesson');
    Route::post('/ajax/log/course', 'ajaxLogCourse')->name('ajax_course_log');
});

Route::prefix('admin/elearning/modules')->middleware(['auth'])->controller(ModuleController::class)->group(function () {   
    Route::get('/', 'modules');
    Route::get('/create', 'createModule')->name('module_create'); 
    Route::post('/create', 'storeModule')->name('module_store');
    Route::get('/{id}', 'showModule');
    Route::get('/{slug}/edit', 'editModule')->name('module_edit');
    Route::post('/{slug}/edit', 'updateModule')->name('module_update');
    Route::delete('/{id}/destroy', 'deleteModule');
});

Route::prefix('admin/elearning/lessons')->middleware(['auth'])->controller(LessonController::class)->group(function () {   
    Route::get('/', 'lessons');
    Route::get('/create', 'createLesson')->name('lesson_create');
    Route::post('/create', 'storeLesson')->name('lesson_store');
    Route::get('/{slug}', 'showLesson');
    Route::get('/{slug}/edit', 'editLesson')->name('lesson_edit');
    Route::post('/{slug}/edit', 'updateLesson')->name('lesson_update');
    Route::delete('/{slug}/destroy', 'deleteLesson');
    
});
