<?php
use App\Http\Controllers\AdspyController; 

Route::prefix('adspy')->controller(AdspyController::class)->group(function () {   
    Route::get('/', 'index');      
    Route::get('/facebook', 'facebook');    
    Route::post('/facebook', 'getAdFromFacebook');      
    Route::get('/pinterest/{id}', 'pinterest');      
    Route::get('/tiktok', 'tiktok');      
    Route::get('/mylist', 'mylist');    
    Route::get('/details/{id}', 'details');    
    
    Route::post('/load-more-data', 'loadMoreData');
    Route::post('/scrapAdBy/{id}', 'scrapAdById');

});