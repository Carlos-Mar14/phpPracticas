<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\BlogController;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
        ->middleware(['auth', 'verified'])
        ->name('dashboard');

Route::view('profile', 'profile')
        ->middleware(['auth'])
        ->name('profile');

// Rutas para el blog y la inyección de controlador para carga de comentarios
Route::view('livewire/archivos_php', 'livewire.archivos_php')->name('archivos_php');

// Rutas para el blog
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');
Route::get('/blogs/create/individualBlogs', [BlogController::class, 'create'])->name('blogs.create');
Route::post('/blogs', [BlogController::class, 'store'])->name('blogs.store');

//ruta para el blog y el boton edit
Route::post('/blogs/{blog}/edit', [BlogController::class, 'edit'])->name('blogs.edit');
//ruta para el destroy
Route::post('/blogs/{blog}/destroy', [BlogController::class, 'destroy'])->name('blogs.destroy');

Route::get('/blogs/{blog}/individualBlogs', [BlogController::class, 'individualBlogs'])->name('blogs.individualBlogs');
Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('blogs.individualBlogs'); // View single post



Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/livewire/form-comment', [CommentController::class, 'index'])->name('comments.index');
Route::put('/comments/{id}', [CommentController::class, 'update'])->name('comments.update');
Route::delete('/comments/{comment}', [CommentController::class, 'destroy'])->name('comments.destroy');


// Rutas para los blogs
// Route::view('livewire/blog-baloncesto', 'livewire.blog-baloncesto')->name('blog-baloncesto');
// Route::view('livewire/blog-tenis', 'livewire.blog-tenis')->name('blog-tenis');
// Route::view('livewire/blog-futbol{blog}', 'livewire.blog-futbol')->name('blog-futbol');
// Route::view('livewire/blog-ciclismo{blog}', 'livewire.blog-ciclismo')->name('blog-ciclismo');
// Route::view('livewire/blog-natacion{blog}', 'livewire.blog-natacion')->name('blog-natacion');
// Route::view('livewire/blog-futbol-americano{blog}', 'livewire.blog-futbol-americano')->name('blog-futbol-americano');





require __DIR__ . '/auth.php';
