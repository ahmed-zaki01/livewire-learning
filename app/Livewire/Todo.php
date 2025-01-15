<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public $todos = [];

    public $todo = '';

    public function mount()
    {
        $this->todos = [
            'Learn Laravel',
            'Learn Vue.js',
            'Learn Livewire',
        ];
    }

    public function add()
    {
        $this->todos[] = $this->todo;
    }

    public function remove($index)
    {
        unset($this->todos[$index]);
    }

    public function clear()
    {
        $this->todos = [];
    }

    public function render()
    {
        return view('livewire.todo');
    }
}
