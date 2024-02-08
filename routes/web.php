<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\UserController;

Route::redirect("/","/login");

Route::get('/login', function () {
    return view('/auth/login');
});

Route::get("/signup", function(){
    return view("/auth/signup");
});

// Route::get("/terms", function(){ return view("/auth/terms"); });
Route::get("/terms", [AuthController::class, 'showPDF']);

Route::post('/login', [AuthController::class, 'login'])->name('user.login');
Route::post('/signup', [AuthController::class, 'signup'])->name('user.signup');

Route::group(['prefix' => 'user', 'middleware' => ['auth']], function(){
    
    Route::get('/dashboard', [CustomerController::class, 'index']);
    Route::get('/mqtt/{serial?}', [CustomerController::class, 'showMQTT']);
    Route::get('/avens', [CustomerController::class, 'index'])->name("user.avens");
    Route::get('/customer/{customer_id?}', [CustomerController::class, 'showByCustomer'])->name("user.showCustomer");
    Route::get('/unit/{unit_id?}', [CustomerController::class, 'showByUnit']);
    Route::get('/showChart', [CustomerController::class, 'showChart']);
    Route::post('/change_activate', [CustomerController::class, 'changeActivation']);
    Route::get('/customers', [CustomerController::class, 'showCustomers'])->name("user.customers");
    Route::get('/admin/edit_level/{customer_id?}', [CustomerController::class, 'adminEditCustomerLevel'])->name("admin.edit.customer_level");
    Route::post('/admin/save_level', [CustomerController::class, 'adminSaveCustomerLevel'])->name("admin.save.customer_level");
    Route::get('/delete-customer/{customer_id?}', [CustomerController::class, 'deleteCustomer'])->name("user.delete.customer");
    

    Route::get('/languages/change/{lang?}', [DashboardController::class, 'changeLanguage']);
    Route::get("/languages/level1/editAuth", [LangController::class, 'editAuth'])->name('level1.edit.auth');
    Route::post("/languages/level1/editAuth", [LangController::class, 'saveAuth']);
    Route::get("/languages/level2/editWords", [LangController::class, 'editLevel2TargetWords'])->name('level2.edit.words');
    Route::post("/languages/level2/update_words", [LangController::class, 'level2UpdateWord'])->name('level2.update.words');
    Route::get("/languages/admin/showAll", [LangController::class, 'showAll'])->name('admin.show.language');
    Route::post("/languages/admin/save_new_word", [LangController::class, 'adminUpdateWords'])->name('admin.update.words');
    Route::post("/languages/admin/update_words", [LangController::class, 'adminAddNewWord'])->name('admin.add.newword');
    
    
    Route::get('/back', [CustomerController::class, 'back']);
    Route::get('/signout', [AuthController::class, 'signout'])->name('user.signout');

});


