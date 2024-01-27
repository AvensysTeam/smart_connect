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
    Route::get('/mqtt', [CustomerController::class, 'showMQTT']);
    Route::get('/customers', [CustomerController::class, 'index'])->name("user.customers");
    Route::get('/customer', [CustomerController::class, 'showCustomer'])->name("user.showCustomer");
    Route::get('/customer_unit/:customer_id', [CustomerController::class, 'showUnit']);
    Route::get('/showChart', [CustomerController::class, 'showChart']);

    Route::get('/signout', [AuthController::class, 'signout'])->name('user.signout');

});


