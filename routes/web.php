<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Livewire\FormComment;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');
    
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

//Ruta para el blog e inyeccion de controlador para carga de comentarios
Route::view('livewire/archivos_php', 'livewire.archivos_php')
        ->name('archivos_php');
//Ruta blog-baloncesto
Route::view('livewire/blog-baloncesto', 'livewire.blog-baloncesto')
        ->name('blog-baloncesto');
//Ruta blog-tenis
Route::view('livewire/blog-tenis', 'livewire.blog-tenis')
        ->name('blog-tenis');
//Ruta blog-futbol
Route::view('livewire/blog-futbol', 'livewire.blog-futbol')
        ->name('blog-futbol');
//Ruta blog-ciclismo
Route::view('livewire/blog-ciclismo', 'livewire.blog-ciclismo')
        ->name('blog-ciclismo');
//Ruta blog-natacion
Route::view('livewire/blog-natacion', 'livewire.blog-natacion')
        ->name('blog-natacion');
//Ruta blog-futbol-americano
Route::view('livewire/blog-futbol-americano', 'livewire.blog-futbol-americano')
        ->name('blog-futbol-americano');

 //Ruta FormComment
Route::get('/livewire/form-comment', [CommentController::class, 'index'])->name('comments.index');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::put('/comments/{id}', [CommentController::class, 'update'])->name('comments.update');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');



require __DIR__.'/auth.php';
