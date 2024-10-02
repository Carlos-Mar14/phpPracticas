<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
    
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

//Ruta para el blog e inyeccion de controlador para carga de comentarios
Route::get('livewire/archivos_php', [CommentController::class, 'index'])
        ->name('archivos_php');
Route::resource('comments', CommentController::class);


    

require __DIR__.'/auth.php';
