<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/post', [\App\Http\Controllers\PostController::class, 'index'])->name('post.index');
Route::get('/post/create', [\App\Http\Controllers\PostController::class, 'create'])->name('post.create');
Route::post('/post', [\App\Http\Controllers\PostController::class, 'store'])->name('post.store');
Route::get('/post/{post}/edit', [\App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
Route::put('/post/{post}/update', [\App\Http\Controllers\PostController::class, 'update'])->name('post.update');
Route::delete('/post/{post}/destroy', [\App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');
