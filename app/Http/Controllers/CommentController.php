<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index(Request $request)
    {
        // Obtener todos los comentarios
        $comments = Comment::all();
        dd($comments);
        // Devolver la vista con los comentarios
        return view('livewire.archivos_php', compact('comments'));
    }

    public function store(Request $request)
        {
            // Validar los datos del formulario
            $validated = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'comment' => 'required',
            ]);

            // Crear un nuevo comentario
            Comment::create($validated);

            // Redirigir al usuario después de guardar el comentario
            return redirect()->back();
        }
}
