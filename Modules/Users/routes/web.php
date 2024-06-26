<?php

use Illuminate\Support\Facades\Route;
use Modules\Users\Http\Controllers\UsersController;
use Modules\Users\Http\Controllers\AuthenticationController;

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

Route::group(['middleware' => 'auth'], function () {
    Route::resource('users', UsersController::class)->names('users');
    Route::get('bestuursleden/verwijder/{id}', [UsersController::class, 'destroy']);
});

Route::group([], function () {
    Route::post('authenticatie-login-post', [AuthenticationController::class, 'login']);
    Route::get('authenticatie-login', [AuthenticationController::class, 'loginPage'])->name('login');
    Route::get('authenticatie-uitloggen', [AuthenticationController::class, 'logout']);
});