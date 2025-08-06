<?php

use App\Http\Controllers\EsewaController;
use App\Http\Controllers\KhaltiController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/register', function () {
//     return view('auth.register');
// })->name('register');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/socialite/{provider}', [LoginController::class, 'socialiteRedirect'])->name('social.login');

Route::get('/socialite/callback/{provider}', [LoginController::class, 'handleProviderCallback'])->name('social.callback');

Route::get('/esewa/pay', [EsewaController::class, 'payToEsewa'])->name('esewa.pay');

Route::get('/khalti/pay', [KhaltiController::class, 'payToKhalti'])->name('khalti.pay');
Route::get('/khalti/callback', [KhaltiController::class, 'handleKhaltiCallback'])->name('khalti.callback');
