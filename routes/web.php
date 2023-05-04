<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\CourseController; 
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProjectController; 
use App\Http\Controllers\AdInterestController; 
use App\Http\Controllers\PaymentListController;
use App\Http\Controllers\EmailCampingController;
use App\Http\Controllers\SubscriptionController;
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
    Route::get('/subscription', [PlanController::class, 'subscription'])->name("subscription.index");

    Route::get('plans/{plan}', [PlanController::class, 'show'])->name("plans.show");
    Route::get('/plans/{id}/checkout', [CheckoutController::class, 'createCheckoutSession'])
    ->name('plans.checkout');

    Route::get('/checkout/success', [CheckoutController::class, 'checkoutSuccess'])
        ->name('checkout.success');
    
    Route::get('/checkout/cancel', [CheckoutController::class, 'checkoutCancel'])
        ->name('checkout.cancel');

    Route::get('/change-password', 'changePassword')->name('changePassword');
    Route::post('/change-password', 'postChangePassword')->name('postChangePassword');

    // profile page route
    Route::get('/my-profile', 'myProfile')->name('myProfile');
    Route::get('/my-profile/{id}', 'editMyProfile')->name('editMyProfile');
    Route::post('/my-profile/{id}', 'updateMyProfile')->name('updateMyProfile');

});

Route::middleware("auth")->group(function () {
    Route::get('plans', [PlanController::class, 'index']);
    Route::post('subscription/store', [PlanController::class, 'subscriptionStore'])->name("subscription.create");
    Route::resource('paymentlist', PaymentListController::class);
});

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    // Customer routes
    Route::get('customers', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('customers/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::post('customers/store', [CustomerController::class, 'store'])->name('customers.store');
    Route::get('customers/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::post('customers/{id}/update', [CustomerController::class, 'update'])->name('customers.update');
    Route::get('customers/{id}/delete', [CustomerController::class, 'destroy'])->name('customers.delete');
    Route::get('customers/{id}/show', [CustomerController::class, 'show'])->name('customers.show');
    // Subscription routes
    Route::get('subscriptions', [SubscriptionController::class, 'index'])->name('subscriptions.index');
});

Route::get('/home', function () {
    return redirect('/');
});

Route::middleware(['subscribed'])->group(function () {
    // protected routes 
    // interest project route
    Route::prefix('add-interest')->middleware(['auth'])->controller(ProjectController::class)->group(function () {
        Route::get('/projects', 'index')->name('projectlist');   
        Route::post('/projects', 'addprojectlist')->name('post_projectlist'); 
        Route::get('/projects/{id}', 'projectsingle')->name('project_single');   
        Route::get('/projects/{id}/delete', 'projectdelect')->name('project_delete');   
    });

    // interest search route 
    Route::controller(AdInterestController::class)->middleware(['auth'])->group(function () {
        Route::get('/add-interest', 'adInterest')->name('get_add_interest');
        Route::post('/add-interest', '_adInterest')->name('post_add_interest');
    });


    // email camping route 
    Route::prefix('email-marketing')->middleware(['auth'])->controller(EmailCampingController::class)->group(function () {       
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
    
    Route::middleware(['auth'])->get('/integrations', [EmailCampingController::class, 'integrations']);

    // adspy route
    Route::get('/facebook/auth/redirect', function () {
        return Socialite::driver('facebook')->redirect();
    });
    
    Route::get('/facebook/auth/callback', function () {
        $user = Socialite::driver('facebook')->user();
    
        // $user->token
    });
});
