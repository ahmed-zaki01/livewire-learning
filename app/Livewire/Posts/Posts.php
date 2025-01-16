<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public $posts;

    public $title;

    public $content;

    public $createPostForm = false;

    public function createPost()
    {
        $this->createPostForm = !$this->createPostForm;
    }

    public function mount()
    {
        $this->posts = Post::all();
    }

    public function render()
    {
        return view('livewire.posts.posts');
    }
}
