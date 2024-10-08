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
    public $editingComment = null;

    public function mount()
    {
        $this->loadComments();
    }

    public function loadComments()
    {
        $this->comments = Comment::latest()->paginate(10);
    }

    public function render()
    {
        return view('livewire.form-comment', [
            'comments' => $this->comments,
            'editingComment' => $this->editingComment,
        ]);
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
        $validatedData = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|string|max:1000',
        ]);

        Comment::create($validatedData);
        $this->resetInputFields();
        $this->emit('commentAdded');
    }

    private function update()
    {
        $validatedData = $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'comment' => 'required|string|max:1000',
        ]);

        $this->editingComment->update($validatedData);
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
}
