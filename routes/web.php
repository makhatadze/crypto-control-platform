<?php

use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth\AuthController;
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

Route::middleware('loggedin')
    ->group(function () {
        Route::get('login', [AuthController::class, 'loginView'])->name('loginView');
        Route::post('login', [AuthController::class, 'login'])->name('login');
        Route::get('register', [AuthController::class, 'registerView'])->name('registerView');
        Route::post('register',[AuthController::class,'register'])->name('register');
    });

Route::middleware('auth')
    ->group(function () {
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');

        Route::redirect('/', '/user');

        Route::resource('/user', UsersController::class)
            ->name('index', 'userIndex');

    });
