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

        Route::get('/user-management/training-session', function(){
            return view('pages.apps.user-management.training-session.index');
        })->name('user-management.training-session');

        Route::get('/user-management/conversion-review', function(){
            return view('pages.apps.user-management.conversion-review.index');
        })->name('user-management.conversion-review');
         
        Route::get('/user-management/training-session/activity', function(){
            return view('pages.apps.user-management.training-session.activity');
        })->name('user-management.training-session.activity');

        Route::get('/user-management/training-session/projects', function(){
            return view('pages.apps.user-management.training-session.projects');
        })->name('user-management.training-session.projects');

        Route::get('/user-management/training-session/single-project', function(){
            return view('pages.apps.user-management.training-session.single-project');
        })->name('user-management.training-session.single-project');

        Route::get('/user-management/training-session/billing', function(){
            return view('pages.apps.user-management.training-session.billing');
        })->name('user-management.training-session.billing');        

        Route::get('/user-management/training-session/profile', function(){
            return view('pages.apps.user-management.training-session.profile');
        })->name('user-management.training-session.profile');
         
        Route::get('/user-management/help-support/faq', function(){
            return view('pages.apps.user-management.help-support.faq');
        })->name('user-management.help-support.faq');   

        Route::get('/user-management/help-support/contact', function(){
            return view('pages.apps.user-management.help-support.contact');
        })->name('user-management.help-support.contact');  

        Route::get('/user-management/help-support/organization', function(){
            return view('pages.apps.user-management.help-support.organization');
        })->name('user-management.help-support.organization');         
        
        
        Route::get('/user-management/training-session/subscriptions', function(){
            return view('pages.apps.user-management.training-session.subscriptions');
        })->name('user-management.training-session.subscriptions');   

         
        Route::get('/user-management/training-session/upgrade-plan', function(){
            return view('pages.apps.user-management.training-session.upgrade-plan');
        })->name('user-management.training-session.upgrade-plan');   

         

    });

});

Route::get('/error', function () {
    abort(500);
});

Route::get('/auth/redirect/{provider}', [SocialiteController::class, 'redirect']);

require __DIR__ . '/auth.php';
