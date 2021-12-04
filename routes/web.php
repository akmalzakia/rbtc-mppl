<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\Dashboard\DashboardBookController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\DashboardInquiryController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\MagazineController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->can('admin')->name('dashboard');
Route::get('/dashboard/books', [DashboardBookController::class, 'index'])->can('admin')->name('dashboard.books');
Route::get('/dashboard/inquiries', [DashboardInquiryController::class, 'index'])->can('admin')->name('dashboard.inquiries');

Route::get('/profile/{user}', [UserController::class ,'show']);

require __DIR__.'/auth.php';

Route::resource('/books', BookController::class);
Route::get('/csrf', [MagazineController::class,'showToken']);
Route::get('/contact',[InquiryController::class, 'create']);
Route::resource('/inquiry', InquiryController::class)->except('create');
