<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', function () {
        return response('Welcome to the Home Page! This is a placeholder for your home route. You can customize this view as needed.', 200);
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
