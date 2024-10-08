<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Comment;

class Archivo1 extends Component
{
    public $comments;
    public $comment;
    public function render()
    {
        return view('livewire.archivos_php', [
            'comments' => Comment::latest()->paginate(10),
            'comment' => null,
        ]);
    }
    
    public function editComment($id)
    {
        $this->comment = Comment::findOrFail($id);
    }
}
