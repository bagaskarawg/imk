<?php

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

Route::get('/', function () {
    return Inertia\Inertia::render('Home');
})->name('home');

Route::get('masuk', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('daftar', 'Auth\RegisterController@showRegistrationForm')->name('register');
