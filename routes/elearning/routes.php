<?php
use App\Http\Controllers\ElearingController;
use App\Http\Controllers\Elearning\CourseController;
use App\Http\Controllers\Elearning\ModuleController;
use App\Http\Controllers\Elearning\LessonController;

// Route::prefix('elearning')->controller(ElearingController::class)->group(function () {   
//     Route::get('/', 'index');   
//     Route::get('/mylearning', 'mylearning');   
//     Route::get('/favorite', 'suggested');   
// });


Route::prefix('admin/elearning/courses')->controller(CourseController::class)->group(function () {   
    Route::get('/', 'courses');
    Route::get('/create', 'createCourse')->name('course_store'); 
    Route::post('/create', 'storeCourse');
    Route::get('/{id}', 'showCourse');
    Route::get('/{id}/edit', 'editCourse');
    Route::post('/{id}/edit', 'updateCourse');
    Route::delete('/{id}', 'deleteCourse');
});


Route::prefix('admin/elearning/modules')->controller(ModuleController::class)->group(function () {   
    Route::get('/', 'modules');
    Route::get('/create', 'createModule'); 
    Route::post('/create', 'storeModule');
    Route::get('/{id}', 'showModule');
    Route::get('/{id}/edit', 'editModule');
    Route::post('/{id}/edit', 'updateModule');
    Route::delete('/{id}', 'deleteModule');
});

Route::prefix('admin/elearning/lessons')->controller(LessonController::class)->group(function () {   
    Route::get('/', 'lessons');
    Route::get('/create', 'createLesson');
    Route::post('/create', 'storeLesson');
    Route::get('/{id}', 'showLesson');
    Route::get('/{id}/edit', 'editLesson');
    Route::post('/{id}/edit', 'updateLesson');
    Route::delete('/{id}', 'deleteLesson');
    
});