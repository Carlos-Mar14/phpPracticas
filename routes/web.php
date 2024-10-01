<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('livewire/archivos_php', 'livewire.archivos_php')
    ->name('archivos_php');
    
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
    
Route::resource('comments', CommentController::class);
    

require __DIR__.'/auth.php';
