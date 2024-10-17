<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::latest()->get();
        return view('livewire.form-comment', ['comments' => $comments]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|string|max:1000',
        ]);

        try {
            // Crea una nueva instancia de Comment con los datos validados
            $comment = new Comment();
            $comment->fill($validatedData);
            $comment->post_id = $request->input('post_id'); // Obtiene post_id desde la solicitud
            $comment->save();

            return redirect()->back()->with('success', 'Comentario agregado con éxito.');
        } catch (\Exception $e) {
            return back()->with('error', 'Ocurrió un error al guardar el comentario. Por favor, inténtelo nuevamente.');
        }
    }


    public function update(Request $request, Comment $comment)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|string|max:1000',
        ]);

        $comment->update($validatedData);

        return redirect()->route('comments.index')->with('success', 'Comentario actualizado con éxito.');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->back()->with('success', 'Comentario eliminado con éxito.');
    }
}
