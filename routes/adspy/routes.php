<?php
use App\Http\Controllers\AdspyController; 
use App\Http\Controllers\ElearingController;
Route::prefix('adspy')->controller(AdspyController::class)->group(function () {   
    Route::get('/', 'index');      
    Route::get('/facebook', 'facebook');    
    Route::post('/facebook', 'getAdFromFacebook');      
    Route::get('/pinterest/{id}', 'pinterest');      
    Route::get('/tiktok', 'tiktok');      
    Route::get('/mylist', 'mylist');    
    Route::get('/facebook/{id}', 'details');    
    
    Route::get('/load-more-data', 'loadMoreData');
    Route::get('/scrapAdBy/{id}', 'scrapAdById');

    Route::get('/facebook2/login', 'redirectToFacebook');
    Route::get('/facebook2/callback', 'facebookCallback');


});

Route::get('elarning2', [ElearingController::class, 'index']);