<?php

use App\Http\Controllers\Apps\PermissionManagementController;
use App\Http\Controllers\Apps\RoleManagementController;
use App\Http\Controllers\Apps\UserManagementController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/', [DashboardController::class, 'index']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::name('user-management.')->group(function () {
        Route::resource('/user-management/users', UserManagementController::class);
        Route::resource('/user-management/roles', RoleManagementController::class);
        Route::resource('/user-management/permissions', PermissionManagementController::class);

        Route::get('/training-session', function(){
            return view('pages.apps.user-management.training-session.index');
        })->name('training-session');

        Route::get('/conversion-review', function(){
            return view('pages.apps.user-management.conversion-review.index');
        })->name('conversion-review');
         
        Route::get('/organization', function(){
            return view('pages.apps.user-management.help-support.organization');
        })->name('organization');     
        
        Route::get('/conversation', function(){
            return view('pages.apps.user-management.training-session.conversation');
        })->name('conversation'); 
        
    });

});

 Route::get('/frontend/activity',function(){
   return view('pages.apps.frontend.activity');
 })->name('frontend.activity');


 Route::get('/frontend/billing',function(){
    return view('pages.apps.frontend.billing');
  })->name('frontend.billing');
 
  Route::get('/frontend/contact',function(){
    return view('pages.apps.frontend.contact');
  })->name('frontend.contact');

  Route::get('/frontend/faq',function(){
    return view('pages.apps.frontend.faq');
  })->name('frontend.faq');

  Route::get('/frontend/profile',function(){
    return view('pages.apps.frontend.profile');
  })->name('frontend.profile');

  Route::get('/frontend/projects',function(){
    return view('pages.apps.frontend.projects');
  })->name('frontend.projects');

  Route::get('/frontend/single-project',function(){
    return view('pages.apps.frontend.single-project');
  })->name('frontend.single-project');

  Route::get('/frontend/subscriptions',function(){
    return view('pages.apps.frontend.subscriptions');
  })->name('frontend.subscriptions');

  Route::get('/frontend/upgrade-plan',function(){
    return view('pages.apps.frontend.upgrade-plan');
  })->name('frontend.upgrade-plan');

  Route::get('/frontend/settings',function(){
    return view('pages.apps.user-management.training-session.setting');
  })->name('frontend.settings');



Route::get('/error', function () {
    abort(500);
});

Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

require __DIR__ . '/auth.php';
