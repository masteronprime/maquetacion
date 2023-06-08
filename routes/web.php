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

Route::get('/', function () {
        return view('welcome');
});
Route::get('users/registration', function () {
    return view('verify');
})->name('users.verify.form');

Route::get('users/registration/fail', function () {
    return view('fail');
})->name('users.fail.form');

