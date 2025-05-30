<?php

namespace App\Livewire\Todos;

use App\Models\Todo;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Illuminate\Support\Str;
class Create extends Component
{
    #[Rule('required|string|min:1')]
    public string $title;
    function saveTodo() {
       Todo::create(array_merge($this->validate(),['uuid'=>Str::uuid()->toString()]));
       $this->redirectRoute('todos.index');
    }
    public function render()
    {
        return view('livewire.todos.create');
    }
}
