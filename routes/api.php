<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\GoogleSheetController;

Route::post('users/registration', [UsuarioController::class,'CreateUser'])->name('users.registration');

Route::get('sheet',[GoogleSheetController::class,'index']);