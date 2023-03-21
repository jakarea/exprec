<?php
use App\Http\Controllers\AdspyController; 

Route::prefix('adspy')->controller(AdspyController::class)->group(function () {   
    Route::get('/', 'index');      
    Route::get('/facebook', 'facebook');      
    Route::get('/pinterest', 'pinterest');      
    Route::get('/tiktok', 'tiktok');      
    Route::get('/mylist', 'mylist');      
});