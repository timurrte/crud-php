<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppController;

Route::get('/', [AppController::class, 'index'])->name('app.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::get('/posts', [PostController::class, 'index'])->name('post.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('post.create');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('post.show');

Route::post('/posts', [PostController::class, 'store'])->name('post.store');

Route::get('/posts/update', [PostController::class,'update']);
Route::get('/posts/delete/{id}', [PostController::class,'delete']);
Route::get('/posts/update_or_create', [PostController::class,'updateOrCreate']);
Route::get('/posts/first_or_create', [PostController::class,'firstOrCreate']);

