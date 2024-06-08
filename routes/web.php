<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/create', [UserController::class, 'create'])->name('user.create');
Route::post('/register', [UserController::class, 'register'])->name('user.register');
Route::get('/edit/{user?}', [UserController::class, 'edit'])->name('user.edit');
Route::put('/update/{user}', [UserController::class, 'update'])->name('user.update');
Route::delete('/delete/{user}', [UserController::class, 'delete'])->name('user.delete');