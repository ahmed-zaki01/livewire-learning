<?php

use App\Livewire\Posts\CreatePost;
use App\Livewire\Posts\Posts;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts', Posts::class)->name('posts.index');
