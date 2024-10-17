<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;

class FormComment extends Component
{
    public $name;
    public $email;
    public $comment;
    public $comments;
    public $blogId;

    public function mount($blogId)
    {
        $this->blogId = $blogId;
        $this->resetValidation();
        $this->loadComments();
    }

    private function loadComments()
    {
        $this->comments = Comment::where('blog_id', $this->blogId)->latest()->get();
    }

    public function resetForm()
    {
        $this->reset(['name', 'email', 'comment']);
        $this->resetValidation();
    }
    public function submitComment()
    {
        $this->validate([
            'post_id' => $this->postId,
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|string|max:1000',
        ]);

        try {
            $comment = new Comment();
            $comment->fill($this->only(['name', 'email', 'comment']));
            $comment->blog_id = $this->blogId;
            $comment->save();

            $this->resetForm();
            $this->loadComments();
            return redirect()->back()->with('success', 'Comentario agregado con éxito.');
        } catch (\Exception $e) {
            return back()->with('error', 'Ocurrió un error al guardar el comentario. Por favor, inténtelo nuevamente.');
        }
    }
    public function render()
    {
        return view('livewire.form-comment', [
            'comments' => $this->comments,
        ]);
    }
}
