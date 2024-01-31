<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('/auth/login');
});

Route::get('/login', function () {
    return view('/auth/login');
});

Route::get("/signup", function(){
    return view("/auth/signup");
});

Route::post('/login', [AuthController::class, 'login'])->name('user.login');
Route::post('/signup', [AuthController::class, 'signup'])->name('user.signup');

Route::group(['prefix' => 'user', 'middleware' => ['auth']], function(){
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');
    Route::get('/mqtt/{serial?}', [CustomerController::class, 'showMQTT']);
    Route::get('/customers', [CustomerController::class, 'index'])->name("user.customers");
    Route::get('/customer/{customer_id?}', [CustomerController::class, 'showByCustomer'])->name("user.showCustomer");
    Route::get('/unit/{unit_id?}', [CustomerController::class, 'showByUnit']);
    Route::get('/showChart', [CustomerController::class, 'showChart']);
    Route::get('/languages/change/{lang?}', [DashboardController::class, 'changeLanguage']);
    Route::post('/change_activate', [CustomerController::class, 'changeActivation']);
    

    Route::get('/signout', [AuthController::class, 'signout'])->name('user.signout');

});


