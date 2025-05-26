<?php

use App\Livewire\Todos\Index;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('Index');
}); */
Route::get('/',Index::class);