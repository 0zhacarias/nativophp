<?php

use App\Livewire\Todos\Create;
use App\Livewire\Todos\Delete;
use App\Livewire\Todos\Index;
use App\Livewire\Todos\Update;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('Index');
}); */
Route::get('/',Index::class)->name('todos.index');
Route::get('/todos/create',Create::class)->name('todos.create');
Route::get('/todos/update',Update::class)->name('todos.update');
Route::post('/todos/complete',Index::class)->name('complete');
Route::post('/todos/edit',Index::class)->name('todos.edit');
Route::post('/todos/syncCurrent',Index::class)->name('syncCurrent');
Route::get('/todos/delete',Delete::class)->name('todos.delete');