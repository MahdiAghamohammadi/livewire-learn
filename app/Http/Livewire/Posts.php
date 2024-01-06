<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{

    public $title;
    public $content;
    public $allPost;
    protected $rules = [
        'title' => 'required|string|min:5',
        'content' => 'required|string|max:100',
    ];


    public function savePost()
    {
        $this->validate();
        Post::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);
        $this->reset('title', 'content');
        $this->allPost = Post::all();
    }

    public function mount()
    {
        $this->allPost = Post::all();
    }

    public function render()
    {
        return view('livewire.posts');
    }
}
