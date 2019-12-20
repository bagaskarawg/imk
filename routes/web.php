<?php

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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function () {
        return Inertia\Inertia::render('Welcome');
    })->name('welcome');

    Route::get('masuk', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('masuk', 'Auth\LoginController@login')->name('login.attempt');

    Route::get('daftar', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('daftar', 'Auth\RegisterController@register');

    Route::get('aktivasi', 'Auth\RegisterController@showActivationForm')->name('activation');
    Route::post('aktivasi/kirim-ulang', 'Auth\RegisterController@resendActivationCode')->name('activation.resend');
    Route::post('aktivasi', 'Auth\RegisterController@activate');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('beranda', function () {
        return Inertia\Inertia::render('Home');
    })->name('home');
    Route::get('pendaftaran/akta', 'DocumentRegistrationController@akta')->name('registration.akta');
    Route::get('pendaftaran/ktp', 'DocumentRegistrationController@ktp')->name('registration.ktp');
    Route::get('pendaftaran/kk', 'DocumentRegistrationController@kk')->name('registration.kk');
    Route::get('pendaftaran/tiket', 'DocumentRegistrationController@ticket')->name('registration.ticket');
    Route::get('pendaftaran/persyaratan', 'DocumentRegistrationController@requirements')
        ->name('registration.requirements');
    Route::post('keluar', 'Auth\LoginController@logout')->name('logout');
});
