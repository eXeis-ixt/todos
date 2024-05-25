<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');


Route::get('todos', [TodoController::class, 'index'])->middleware(['auth', 'verified'])->name('todos');


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
