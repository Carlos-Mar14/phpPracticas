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
        // Devolver la vista con los comentarios
        return view('livewire.archivos_php', compact('comments'));
    }

    public function show(Comment $comment)
    {
        return view('livewire.archivos_php', compact('comment'));
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

    public function destroy(Comment $comment)
    {
        // Verificar que el comentario exista
        if (!$comment) {
            return redirect()->back()->with('error', 'El comentario no existe');
        }

        // Eliminar el comentario
        $comment->delete();

        // Actualizar la lista de comentarios actuales
        $comments = Comment::all();
        // Devolver la vista con los comentarios actualizados
        return redirect()->route('archivos_php');
    }

    public function update(Request $request, Comment $comment)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'comment' => 'required',
        ]);
        $comment->update($validated);

        return redirect()->route('archivos_php');
    }
}
