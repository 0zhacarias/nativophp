<?php

namespace App\Livewire\Todos;

use App\Models\Todo;
use Livewire\Component;
use Livewire\Attributes\Rule;

class Update extends Component
{
    public Todo $todo;
    #[Rule('required|string|min:1')]
    public string $title;
    function mount(Todo $todo)  {
        $this->todo=$todo;
        $this->title=$todo->title;
       // dd($this->todo);
    }
    function updateTodo()  {
       // dd($todo);
        $this->todo->update($this->validate());
        $this->redirectRoute('todos.index');
    }
    public function render()
    {
        return view('livewire.todos.update');
    }
}
