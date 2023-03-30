<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 

use App\Http\Controllers\CourseController; 
use App\Http\Controllers\ProjectController; 
use App\Http\Controllers\AdInterestController; 
use App\Http\Controllers\EmailCampingController; 


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

// general page route
Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/home', 'index');
});

Route::get('/home', function () {
    return redirect('/');
});

// interest project route
Route::prefix('add-interest')->controller(ProjectController::class)->group(function () {
    Route::get('/projects', 'index')->name('projectlist');   
    Route::post('/projects', 'addprojectlist')->name('post_projectlist'); 
    Route::get('/projects/{id}', 'projectsingle')->name('project_single');   
    Route::get('/projects/{id}/delete', 'projectdelect')->name('project_delete');   
});

// interest search route 
Route::controller(AdInterestController::class)->group(function () {
    Route::get('/add-interest', 'adInterest')->name('get_add_interest');
    Route::post('/add-interest', '_adInterest')->name('post_add_interest');
});


// email camping route 
Route::prefix('email-marketing')->controller(EmailCampingController::class)->group(function () {       
    Route::get('/', 'index');     
    Route::get('/campaigns', 'campaigns'); 
    Route::get('/campaigns/new', 'new');  
    Route::get('/signup-form', 'signUpForm');  
    Route::get('/audience', 'listSegments'); 
    Route::get('/audience/list-segments', 'listSegments'); 
    Route::get('/content', 'templates'); 
    Route::get('/content/templates', 'templates'); 
    Route::get('/content/templates/build', 'templateBuild'); 
    Route::get('/images-brand', 'imagesBrand'); 
    Route::get('/dashboard', 'dashboard'); 
    Route::get('/flows', 'flows');  
    Route::get('/1', 'e_camping_1');     
    Route::get('/2', 'e_camping_2');              
});
 
Route::get('/integrations', [EmailCampingController::class, 'integrations']);

// adspy route

// course route
Route::prefix('elearning')->controller(CourseController::class)->group(function () {   
    Route::get('/', 'index');   
    Route::get('/mylearning', 'mylearning');   
    Route::get('/favorite', 'suggested');   
});