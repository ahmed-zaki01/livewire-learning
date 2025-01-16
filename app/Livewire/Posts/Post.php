<?php

namespace App\Livewire\Posts;

use App\Models\Post as PostModel;
use Livewire\Component;

class Post extends Component
{
    public $post;

    public function mount(PostModel $post)
    {
        $this->post = $post;
    }

    public function render()
    {
        return view('livewire.posts.post');
    }
}
