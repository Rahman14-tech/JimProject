<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ExerciseController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

//Admin Routing
// Route::get('admin/login', [AdminAuthController::class, 'getLogin'])->name('adminLogin');
// Route::post('admin/login', [AdminAuthController::class, 'postLogin'])->name('adminLoginPost');
// Route::get('admin/logout', [AdminAuthController::class, 'adminLogout'])->name('adminLogout');

// Route::group(['prefix' => 'admin', 'middleware' => 'adminauth'], function () {
//     // Admin Dashboard
//     Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
// });

Route::group(['prefix' => 'admin','middleware' => 'adminauth'], function(){
    Route::get('/home', [AdminController::class,'index'])->name('admin.home');
});

//user routing
Route::get('/', function () {
    return view('User.landing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('Exercise', ExerciseController::class);

Route::get('/selection', [App\Http\Controllers\HomeController::class, 'selection'])->name('selection');
