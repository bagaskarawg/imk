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
    return Inertia\Inertia::render('Welcome');
})->name('welcome');
Route::get('masuk', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('daftar', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::get('beranda', function () {
    return Inertia\Inertia::render('Home');
})->name('home');
