<?php

namespace App\Livewire\Posts;

use App\Models\Post;
use Livewire\Component;

class Create extends Component
{
    public $title;

    public $content;



    public function storePost()
    {
        $this->validate([
            'title' => 'required|string|min:6',
            'content' => 'required|string|min:6',
        ]);

        Post::create([
            'user_id' => null,
            'title' => $this->title,
            'content' => $this->content,
        ]);

        $this->title = '';
        $this->content = '';

        session()->flash('message', 'Post created successfully.');
        return redirect()->route('posts.index');
    }

    public function render()
    {
        return view('livewire.posts.create');
    }
}
