<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::latest()->paginate(10);
        return view('livewire.form-comment', compact('comments'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|string|max:1000',
        ]);

        Comment::create($validatedData);

        return redirect()->route('comments.index')->with('success', 'Comentario agregado con éxito.');
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
