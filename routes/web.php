<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\RefundController;
use App\Http\Controllers\CourseController; 
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProjectController; 
use App\Http\Controllers\AdInterestController; 
use App\Http\Controllers\PaymentListController;
use App\Http\Controllers\EmailCampingController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\CustomerSubscriptionController;
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
    Route::get('/personal-space', 'personalSpace')->name('personal.space');
    Route::get('/home', 'index');
    Route::get('/subscribers', [PlanController::class, 'subscription'])->name("subscription.index");

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

    // refund page route
    Route::get('/refund', [RefundController::class, 'index'])->name('refund.index');
    Route::get('/refund/{id}/create', [RefundController::class, 'create'])->name('refund.create');
    Route::post('/refund/store', [RefundController::class, 'store'])->name('refund.store');
    Route::post('/refund/cancel', [RefundController::class, 'cancel'])->name('refund.cancel');
    Route::get('/refund/{id}/cancelSubscription', [RefundController::class, 'cancelSubscription'])->name('refund.CancelSubscription');
    Route::get('/refund/{id}/approve', [RefundController::class, 'approve'])->name('refund.approve');
    Route::get('/refund/{id}/rejected', [RefundController::class, 'rejected'])->name('refund.reject');
    Route::post('/refund/{id}/update', [RefundController::class, 'update'])->name('refund.update');
    Route::get('/refund/{id}/delete', [RefundController::class, 'destroy'])->name('refund.delete');
    Route::get('/refund/{id}/show', [RefundController::class, 'show'])->name('refund.show');

    // api calculator route
    Route::get('kpi/calculator', 'calculator')->name('kpiCalculator');

    // timeline page
    Route::get('/timeline', 'timeline');
});

Route::get('/home', function () {
    return redirect('/');
});

Route::middleware(['auth', 'check.subscription'])->group(function (){
    // Plan routes
    Route::get('plans', [PlanController::class, 'index']);
    Route::post('subscription/store', [PlanController::class, 'subscriptionStore'])->name("subscription.create");
    Route::resource('paymentlist', PaymentListController::class); 
    // Roles
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
    Route::get('subscriptions/create', [SubscriptionController::class, 'create'])->name('subscriptions.create');
    Route::post('subscriptions/store', [SubscriptionController::class, 'store'])->name('subscriptions.store');
    Route::get('subscriptions/{id}/edit', [SubscriptionController::class, 'edit'])->name('subscriptions.edit');
    Route::post('subscriptions/{id}/update', [SubscriptionController::class, 'update'])->name('subscriptions.update');
    Route::get('subscriptions/{id}/refunds', [SubscriptionController::class, 'refunds'])->name('subscriptions.refunds');
    Route::get('subscriptions/{id}/delete', [SubscriptionController::class, 'destroy'])->name('subscriptions.delete');
    Route::get('subscriptions/{id}/show', [SubscriptionController::class, 'show'])->name('subscriptions.show');

    // Customer Subscription routes
    Route::get('customer-subscriptions', [CustomerSubscriptionController::class, 'index'])->name('customer.subscriptions.index');
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
        
        // e camping new html pages
        Route::get('/campaigns-2', function () { return view('email-camping/campaigns-2'); });
        Route::get('/flows-2', function () { return view('email-camping/flows-2'); });
        Route::get('/signup-form-2', function () { return view('email-camping/signup-form-2'); });
        Route::get('/products', function () { return view('email-camping/products'); });
        Route::get('/profile', function () { return view('email-camping/profile'); });
        Route::get('/audience', function () { return view('email-camping/audience'); });
        Route::get('/images-brand-2', function () { return view('email-camping/images-brand-2'); });
        Route::get('/metrics', function () { return view('email-camping/metrics'); });
        Route::get('/bench-mark', function () { return view('email-camping/bench-mark'); });
        Route::get('/sms-option', function () { return view('email-camping/sms-option'); });

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
