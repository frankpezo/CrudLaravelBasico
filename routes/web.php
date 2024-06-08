<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/create', [UserController::class, 'create'])->name('user.create');
Route::post('/register', [UserController::class, 'register'])->name('user.register');
Route::get('/edit/{user?}', [UserController::class, 'edit'])->name('user.edit');