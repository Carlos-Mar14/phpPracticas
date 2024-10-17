<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Comment;

class BlogBaloncesto extends Component
{
    public $comments;
    public $editingComment = null;
    public $name;
    public $email;
    public $comment;

    public function mount()
    {
        $this->comments = Comment::latest()->get();
    }

    public function loadComments()
    {
        $this->comments = Comment::latest()->get();
    }

    public function editComment($id)
    {
        $this->editingComment = Comment::findOrFail($id);
    }

    public function cancelEdit()
    {
        $this->editingComment = null;
    }

    public function submitForm()
    {
        if (!$this->editingComment) {
            $this->store();
        } else {
            $this->update();
        }
    }


    private function store()
    {
        Comment::create([
            'name' => $this->name,
            'email' => $this->email,
            'comment' => $this->comment,
        ]);

        $this->resetInputFields();
      //  $this->emit('commentAdded');
    }

    private function update()
    {
        $this->editingComment->update([
            'name' => $this->name,
            'email' => $this->email,
            'comment' => $this->comment,
        ]);

        $this->resetInputFields();
        $this->emit('commentUpdated');
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->comment = '';
        $this->editingComment = null;
    }

    public function render()
    {
        return view('livewire.blog-baloncesto', [
            'comments' => $this->comments,
            'editingComment' => $this->editingComment,
        ]);
    }
}
