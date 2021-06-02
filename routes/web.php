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

Route::prefix('admin')
    ->group(function () {
        Route::middleware('loggedin')
            ->group(function () {
                Route::get('login', [AuthController::class, 'loginView'])->name('loginView');
                Route::post('login', [AuthController::class, 'login'])->name('login');

//        Route::get('register', [AuthController::class, 'registerView'])->name('registerView');
//        Route::post('register', [AuthController::class, 'register'])->name('register');
            });

        Route::middleware('auth')
            ->group(function () {
                Route::get('logout', [AuthController::class, 'logout'])->name('logout');

                Route::get('', function () {
                    if (auth()->user()->isAdmin()) {
                        return redirect(\route('userIndex'));
                    }
                });

                Route::middleware('can:isAdmin')
                    ->group(function () {
                        Route::resource('/user', UsersController::class)
                            ->name('index', 'userIndex')
                            ->name('show', 'userView')
                            ->name('create', 'userCreate')
                            ->name('store', 'userStore')
                            ->name('edit', 'userEditView');

                        Route::match(['get', 'post'], '/user/{user}/status', [UsersController::class, 'changeStatus'])->name('userStatus');


                        Route::resource('/verify', \App\Http\Controllers\AdminVerificationController::class)
                            ->name('index', 'adminVerifyIndex')
                            ->name('edit', 'verifyEditView')
                            ->name('update', 'editVerify');
                        Route::match(['get', 'post'], '/user/{user}/add-wallet', [UsersController::class, 'walletCreate'])->name('walletCreate');
                        Route::match(['get','post'], '/user/{user}/edit-wallet/{wallet}', [UsersController::class, 'editWallet'])->name('editWallet');

                        Route::get( '/user/{user}/wallets', [UsersController::class, 'userWallets'])->name('userWallets');

                        Route::get( '/user/{user}/delete-wallet/{wallet}', [UsersController::class, 'deleteWallet'])->name('deleteWallet');

                    });


                Route::match(['get', 'post'], 'change-verification/{user}', [VerificationController::class, 'changeVerification'])->name('changeVerification');
            });
    });

Route::get('', function () {
    return view('client.module.home.index');
})->name('home');

Route::get('about-us', function () {
    return view('client.module.about-us.index');
})->name('aboutUs');

Route::get('roadmap', function () {
    return view('client.module.roadmap.index');
})->name('roadMap');

Route::get('contact', function () {
    return view('client.module.contact.index');
})->name('contact');

Route::get('sign-up', function () {
    return view('client.module.sign-up.index');
})->name('signUp');

Route::get('sign-in', function () {
    return view('client.module.sign-in.index');
})->name('signIn');


Route::middleware('auth')->group(function () {
    Route::match(['get', 'post'], 'verification', [VerificationController::class, 'index'])->name('verifyIndex');
    Route::match(['get', 'post'], '/deposit', [DepositController::class, 'index'])->name('depositIndex');
    Route::match(['get', 'post'], '/withdrawal', [WithdrawalController::class, 'index'])->name('withdrawalIndex');
    Route::get('my-portal', function () {
        return view('client.module.my-portal.index', [
            'user' => auth()->user()
        ]);
    })->name('myPortal');
});



