<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppController;

Route::get('/', [AppController::class, 'index'])->name('app.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::name('post.')->namespace('App\Http\Controllers\Post')->group(function() {
    Route::get('/posts', 'IndexController')->name('index');
    Route::get('/posts/create', 'CreateController')->name('create');
    Route::get('/posts/{post}', 'ShowController')->name('show');
    Route::get('/posts/{post}/edit', 'EditController')->name('edit');

    Route::patch('/posts/{post}', 'UpdateController')->name('update');

    Route::post('/posts', 'StoreController')->name('store');

    Route::delete('/posts/{post}', 'DestroyController')->name('delete');
});