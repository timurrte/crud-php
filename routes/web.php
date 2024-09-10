<?php

use App\Http\Controllers\Post\IndexController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppController;

Route::get('/', [AppController::class, 'index'])->name('app.index');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::name('post.')->prefix('posts')->namespace('Post')->group(function () {
    Route::get('/', IndexController::class)->name('index');
    Route::get('/create', 'CreateController')->name('create');
    Route::get('/{post}', 'ShowController')->name('show');
    Route::get('/{post}/edit', 'EditController')->name('edit');

    Route::patch('/{post}', 'UpdateController')->name('update');

    Route::post('/', 'StoreController')->name('store');

    Route::delete('/{post}', 'DestroyController')->name('delete');
});