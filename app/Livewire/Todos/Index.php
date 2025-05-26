<?php

namespace App\Livewire\Todos;

use App\Models\Todo;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $todos=Todo::get();
        return view('livewire.todos.index',compact('todos'));
    }
}
