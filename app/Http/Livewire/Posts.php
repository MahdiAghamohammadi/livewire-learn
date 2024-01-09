<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class Posts extends Component
{
    use WithFileUploads;

    public $topTitle = "Hello";
    public $isSuccess = true;

    public $title;
    public $content;
    public $image;

    public $allPost;

    protected $rules = [
        'title' => 'required|string|min:5',
        'content' => 'required|string|max:100',
        'image' => 'image|max:1024'
    ];


    public function savePost()
    {
        $this->validate();
        $imgPath = $this->image->store('public/images');
        Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'image' => "/storage/images/" . explode("/", $imgPath)[2]
        ]);
        $this->reset('title', 'content', 'image');
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
