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
    function complete(Todo $todo) {

       $todo->update(['completed_at'=>now()]);
      
    }
    function syncCurrent(Todo $todo) {
      $todos=Todo::get();
      $todos->each(function($todo){
        $todo->update(['currently_working_on'=>false]);

      });
      $todo->update(['currently_working_on'=>true]);
      
    }
    function delete(Todo $todo) {
 
      $todo->forceDelete();
      
    }
}
