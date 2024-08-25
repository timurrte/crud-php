<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppController;

Route::get('/', [AppController::class, 'index'])->name('app.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::get('/post', [PostController::class, 'index'])->name('post.index');
Route::get('/post/create', [PostController::class, 'create']);
Route::get('/post/update', [PostController::class,'update']);
Route::get('/post/delete/{id}', [PostController::class,'delete']);
Route::get('/post/update_or_create', [PostController::class,'updateOrCreate']);
Route::get('/post/first_or_create', [PostController::class,'firstOrCreate']);

