<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BookController::class, 'getBooks'])->name('book.view');
Route::get('/create', [BookController::class, 'getCreatePage'])->name('book.create.page');
Route::post('/create-book', [BookController::class, 'createBook'])->name('book.create');
