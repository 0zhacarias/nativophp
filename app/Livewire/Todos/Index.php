<?php

namespace App\Livewire\Todos;

use App\Models\Todo;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
       // dd(1);
        $todos=Todo::get();
      //  dd( $todos);
      //  $todos=[];
        return view('livewire.todos.index',compact('todos'));
    }
    function complete(Todo $todo) {
     // dd($todo);
       $todo->update(['completed_at'=>now()]);
      
    }
    function syncCurrent(Todo $todo) {
      $todos=Todo::get();
      $todos->each(function($todo){
        $todo->update(['currently_working_on'=>false]);

      });
      $todo->update(['currently_working_on'=>true]);
      //return $todo->update(['completed'=>now()]);
      
    }
    function delete(Todo $todo) {
      dd($todo);
      $todo->forceDelete();
      
    }
}
