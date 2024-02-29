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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/role_logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
Route::get('/notification', [App\Http\Controllers\Notificationcontoller::class, 'notification'])->name('notification');
Route::get('/view_message', [App\Http\Controllers\Notificationcontoller::class, 'view_message'])->name('view_message');
Route::get('/view_user', [App\Http\Controllers\Usercontoller::class, 'view_user'])->name('view_user');
Route::get('/edit_user', [App\Http\Controllers\Usercontoller::class, 'edit_user'])->name('edit_user');
Route::get('/settings', [App\Http\Controllers\Usercontoller::class, 'settings'])->name('settings');
Route::get('/edit_profile', [App\Http\Controllers\Usercontoller::class, 'edit_profile'])->name('edit_profile');
Route::get('/tags', [App\Http\Controllers\Usercontoller::class, 'tags'])->name('tags');
Route::get('/all_users', [App\Http\Controllers\Usercontoller::class, 'all_users'])->name('all_users');
Route::get('/add_users', [App\Http\Controllers\Usercontoller::class, 'add_users'])->name('add_users');
Route::get('/view_users', [App\Http\Controllers\Usercontoller::class, 'view_users'])->name('view_users');
Route::get('/edit_users', [App\Http\Controllers\Usercontoller::class, 'edit_users'])->name('edit_users');
//search docs
Route::get('/search', [App\Http\Controllers\Searchcontoller::class, 'search'])->name('search');
Route::get('/advanced_search', [App\Http\Controllers\Searchcontoller::class, 'advanced_search'])->name('advanced_search');
//all document details
Route::get('/all_document', [App\Http\Controllers\Documentcontoller::class, 'all_document'])->name('all_document');
Route::get('/view_file', [App\Http\Controllers\Documentcontoller::class, 'view_file'])->name('view_file');
Route::get('/edit_file', [App\Http\Controllers\Documentcontoller::class, 'edit_file'])->name('edit_file');
Route::get('/all_invoices', [App\Http\Controllers\Documentcontoller::class, 'all_invoices'])->name('all_invoices');
Route::get('/view_invoice', [App\Http\Controllers\Documentcontoller::class, 'view_invoice'])->name('view_invoice');
Route::get('/edit_invoice', [App\Http\Controllers\Documentcontoller::class, 'edit_invoice'])->name('edit_invoice');
//schedule document details
Route::get('/schedule_document', [App\Http\Controllers\Documentcontoller::class, 'schedule_document'])->name('schedule_document');
Route::get('/upload_document', [App\Http\Controllers\Documentcontoller::class, 'upload_document'])->name('upload_document');
Route::get('/failed_document', [App\Http\Controllers\Documentcontoller::class, 'failed_document'])->name('failed_document');



//password reset
Route::get('/forgot_password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'forgot_password'])->name('forgot_password');
Route::get('/forgot_password_otp', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'forgot_password_otp'])->name('forgot_password_otp');

Route::get('/reset_password', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'reset_password'])->name('reset_password');

