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
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('post.edit');

Route::patch('/posts/{post}', [PostController::class, 'update'])->name('post.update');

Route::post('/posts', [PostController::class, 'store'])->name('post.store');

Route::delete('/posts/{post}', [PostController::class,'destroy'])->name('post.delete');

