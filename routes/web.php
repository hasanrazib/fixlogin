<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');






Route::controller(AdminController::class)->group(function () {
    Route::get('dashboard', 'index')->name('admin.dashboard')->middleware('admin');;
   
     
});

Route::controller(UserController::class)->group(function () {
    Route::get('dashboardd', 'index')->name('user.dashboard')->middleware('user');;
   
     
});
