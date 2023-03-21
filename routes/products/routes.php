<?php
use App\Http\Controllers\ProductCategoryController; 
use App\Http\Controllers\Admin\AdminProductController; 

// admin product route
Route::prefix('admin/products')->controller(AdminProductController::class)->group(function () {    
    Route::get('/', 'index')->name('admin_products_list'); 
    Route::get('create', 'create')->name('product_research_create');   
    Route::post('create', 'store')->name('product_research_store'); 

    Route::get('create/ali-express','addProductFromAliExpress')->name('add_product_from_ali_express');
    Route::post('create/ali-express','storeProductFromAliExpress')->name('store_product_from_ali_express');

    Route::get('{slug}/details', 'view')->name('admin_product_research_details');   
    Route::get('{slug}/edit', 'edit')->name('product_research_edit');
    Route::post('{slug}/edit', 'update')->name('product_research_update');
    Route::get('{slug}/destroy', 'destroy')->name('product_destroy');
    
});

// category route
Route::prefix('admin/categories')->controller(ProductCategoryController::class)->group(function () {       
    Route::get('/', 'index')->name('category_list');    
    Route::get('create', 'create')->name('category_create');    
    Route::post('create', 'store')->name('category_store');    
    Route::get('{slug}/edit', 'edit')->name('category_edit');    
    Route::post('{slug}/edit', 'update')->name('category_update');    
    Route::get('{slug}/destroy', 'destroy')->name('category_destroy');    
});
