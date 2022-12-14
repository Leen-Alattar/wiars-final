<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

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
    return view('interface.index');
});
Route::get('/about', function () {
    return view('interface.about');
});


Route::resource('/category', CategoryController::class)->middleware('admin.auth');;
Route::resource('/role', RoleController::class)->middleware('admin.auth');;
Route::resource('/user', UserController::class)->middleware('admin.auth');;
Route::get('foundation', [CategoryController::class,'show_all_foundations'])->name('foundations.show');
Route::get('certificate', [CategoryController::class,'show_certificate'])->name('certificate.show');



Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
