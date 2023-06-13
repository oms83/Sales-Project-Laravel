<?php

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\DashboardController;

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


// Route::get('/', function () {
//     // return view('test');
//     return view('admin.auth.login');
// });


Route::group(['namespace'=>'Admin', 'prefix'=>'admin', 'middleware'=>'auth:admin'], function(){
    
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');

    Route::get('logut', function(){
        auth()->logout();
    });
    
});


// قبل عملية تسجيل الدخول
Route::group(['namespace'=>'Admin', 'prefix'=>'admin', 'middleware'=>'guest:admin'], function(){
    
    // get الادخال 
    Route::get('login', [LoginController::class, 'show_login_view'])->name('admin.ShowLogin');

    // post الادخال 
    Route::post('login', [LoginController::class, 'login'])->name('admin.login');

    
});

