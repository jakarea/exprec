<?php
use App\Http\Controllers\AdspyController; 
use App\Http\Controllers\ElearingController;
Route::middleware(['auth', 'check.subscription'])->group(function () {
    Route::prefix('adspy')->middleware(['auth'])->controller(AdspyController::class)->group(function () {
        Route::get('/', 'index');      
        Route::get('/facebook', 'facebook');    
        Route::post('/facebook', 'getAdFromFacebook');      
        Route::get('/pinterest/{id}', 'pinterest');      
        Route::get('/tiktok', 'tiktok');      
        Route::get('/mylist', 'mylist');    
        Route::get('/facebook/{id}', 'details');    
        
        Route::get('/load-more-data', 'loadMoreData');
        Route::get('/scrapAdBy/{id}', 'scrapAdById');
        Route::post('/facebook2/save-ad2/yes', 'saveAd');
        Route::post('/facebook2/save-ad2/save-project', 'saveAdInProject');
        Route::post('/facebook2/save-ad2/save-project-new', 'saveAdInProjectNew');
        Route::post('/facebook2/save-ad2/save-current-query', 'saveCurrentQuery');
    });

    Route::get('elarning2', [ElearingController::class, 'index']);
});