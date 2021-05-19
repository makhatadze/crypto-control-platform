<?php

use App\Http\Controllers\Admin\UsersController;
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

Route::prefix('admin')
    ->group(function () {
        Route::middleware('loggedin')
            ->group(function () {
                Route::get('login',[AuthController::class,'loginView'])->name('loginView');
                Route::post('login',[AuthController::class,'login'])->name('login');
            });

        Route::middleware('auth')
            ->group(function () {
                Route::get('logout', [AuthController::class, 'logout'])->name('logout');

                Route::redirect('/', 'admin/user');

                Route::resource('/user', UsersController::class)
                    ->name('index','userIndex');

            });
    });