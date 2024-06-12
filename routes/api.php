<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserApiController;

Route::get('/users', [UserApiController::class, 'index'])->name('users.index');
Route::post('/users/store', [UserApiController::class, 'store'])->name('users.store');
Route::get('/users/show/{id}', [UserApiController::class, 'show'])->name('users.show');
Route::put('/users/update/{id}', [UserApiController::class, 'update'])->name('users.update');
Route::delete('/users/delete/{id}', [UserApiController::class, 'delete'])->name('users.delete');