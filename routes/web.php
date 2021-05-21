<?php

use App\Http\Controllers\DepositController;
use App\Http\Controllers\MyWalletController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\VerificationController;
use App\Http\Controllers\WithdrawalController;
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
        Route::post('register', [AuthController::class, 'register'])->name('register');
    });

Route::middleware('auth')
    ->group(function () {
        Route::get('logout', [AuthController::class, 'logout'])->name('logout');

        Route::get('', function () {
           if (auth()->user()->isAdmin()) {
               return redirect(\route('userIndex'));
           } else {
               return redirect(\route('myWalletIndex'));
           }
        });

        Route::middleware('can:isAdmin')
            ->group(function () {
                Route::resource('/user', UsersController::class)
                    ->name('index', 'userIndex')
                    ->name('show','userView')
                    ->name('edit', 'userEditView');
                Route::match(['get', 'post'], '/user/{user}/set-wallet', [UsersController::class, 'setWallet'])->name('setWallet');
                Route::match(['get','post'],'/user/{user}/edit-wallet',[UsersController::class,'editWallet'])->name('editWallet');
                Route::match(['get','post'],'/user/update-wallet/{user}',[UsersController::class,'updateWallet'])->name('updateWallet');
            });



        Route::get('/my-wallet',[MyWalletController::class,'index'])->name('myWalletIndex');
        Route::match(['get','post'],'/deposit',[DepositController::class,'index'])->name('depositIndex');
        Route::match(['get','post'],'/withdrawal',[WithdrawalController::class,'index'])->name('withdrawalIndex');
        Route::match(['get','post'],'verification',[VerificationController::class,'index'])->name('verifyIndex');
    });
