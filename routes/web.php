<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
##############################  Dashboard and profile details###################################

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/user_logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
    Route::get('/settings', [App\Http\Controllers\Usercontoller::class, 'settings'])->name('settings');
    Route::get('/edit_profile/{id}', [App\Http\Controllers\Usercontoller::class, 'edit_profile'])->name('edit_profile');
    Route::post('/update_profile', [App\Http\Controllers\Usercontoller::class, 'update_profile'])->name('update_profile');
    Route::get('/tags', [App\Http\Controllers\Usercontoller::class, 'tags'])->name('tags');
###########################################################################################


##############################  Search docs##############################################
    Route::get('/search', [App\Http\Controllers\Searchcontoller::class, 'search'])->name('search');
    Route::get('/advanced_search', [App\Http\Controllers\Searchcontoller::class, 'advanced_search'])->name('advanced_search');
#############################################################################################


################################  All document details#########################################

    Route::get('/all_document', [App\Http\Controllers\Documentcontoller::class, 'all_document'])->name('all_document');
    Route::get('/view_file', [App\Http\Controllers\Documentcontoller::class, 'view_file'])->name('view_file');
    Route::get('/edit_file', [App\Http\Controllers\Documentcontoller::class, 'edit_file'])->name('edit_file');
    Route::get('/all_invoices', [App\Http\Controllers\Documentcontoller::class, 'all_invoices'])->name('all_invoices');
    Route::get('/view_invoice', [App\Http\Controllers\Documentcontoller::class, 'view_invoice'])->name('view_invoice');
    Route::get('/edit_invoice', [App\Http\Controllers\Documentcontoller::class, 'edit_invoice'])->name('edit_invoice');
#################################################################################################

############################  Schedule document details####################################
    Route::get('/schedule_document', [App\Http\Controllers\Documentcontoller::class, 'schedule_document'])->name('schedule_document');
    Route::get('/upload_document', [App\Http\Controllers\Documentcontoller::class, 'upload_document'])->name('upload_document');
    Route::get('/failed_document', [App\Http\Controllers\Documentcontoller::class, 'failed_document'])->name('failed_document');
#################################################################################

####################################  Password reset###########################################

    Route::get('/forgot_password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'forgot_password'])->name('forgot_password');
    Route::post('/forgot_password_submit', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'submit'])->name('forgot_password_submit');
    Route::get('/forgot_password_otp', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'forgot_password_otp'])->name('forgot_password_otp');
    Route::post('/otp_submit', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'otp_submit'])->name('otp_submit');
    Route::get('/reset_password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'reset_password'])->name('reset_password');
    Route::post('/reset_password_submit', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'reset_password_submit'])->name('reset_password_submit');
    Route::post('/manager_reset_password_submit', [App\Http\Controllers\Usercontoller::class, 'manager_reset_password_submit'])->name('manager_reset_password_submit');
    Route::get('/reset_user_password', [App\Http\Controllers\Usercontoller::class, 'reset_user_password'])->name('reset_user_password');
     Route::get('/check-current-password',[App\Http\Controllers\Auth\ForgotPasswordController::class,'CheckCurrentPassword'])->name('check-current-password');

############################################################################################

################################## User details##############################################

    Route::get('/all_users', [App\Http\Controllers\Usercontoller::class, 'all_users'])->name('all_users');
    Route::get('/add_users', [App\Http\Controllers\Usercontoller::class, 'add_users'])->name('add_users');
    Route::get('/view_users/{id}', [App\Http\Controllers\Usercontoller::class, 'view_users'])->name('view.users');
    Route::get('/edit_users/{id}', [App\Http\Controllers\Usercontoller::class, 'edit_users'])->name('edit.users');
    Route::post('/add_user_submit', [App\Http\Controllers\Usercontoller::class, 'submit'])->name('add_user_submit');
    Route::post('/update_user_submit', [App\Http\Controllers\Usercontoller::class, 'update_user'])->name('update_user_submit');
    Route::get('/list_users', [App\Http\Controllers\Usercontoller::class, 'getusers'])->name('users.list');
    Route::get('/user_deactivate/{id}', [App\Http\Controllers\Usercontoller::class, 'user_deactivate'])->name('user_deactivate');
    Route::get('/delete_users/{id}', [App\Http\Controllers\Usercontoller::class, 'delete_users'])->name('delete.users');
############################################################################

###########################  Datatable for notifications#######################################

    Route::get('notification/list', [App\Http\Controllers\Notificationcontoller::class, 'list'])->name('notification.list');
    Route::get('/notification', [App\Http\Controllers\Notificationcontoller::class, 'notification'])->name('notification');
    Route::get('/view_notification/{id}', [App\Http\Controllers\Notificationcontoller::class, 'view_message'])->name('view.notification');
    Route::get('/delete_notification/{id}', [App\Http\Controllers\Notificationcontoller::class, 'delete_notification'])->name('delete.notification');
##############################################################################################
