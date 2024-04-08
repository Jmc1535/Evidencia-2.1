<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/libros', [BookController::class, 'index'])->name('libros.index');
Route::get('/libros/create', [BookController::class, 'create'])->name('libros.create');
Route::post('/libros', [BookController::class, 'store'])->name('libros.store');
Route::get('/libros/{id}', [BookController::class, 'show'])->name('libros.show');
Route::get('/libros/{id}/edit', [BookController::class, 'edit'])->name('libros.edit');
Route::put('/libros/{id}', [BookController::class, 'update'])->name('libros.update');
Route::delete('/libros/{id}', [BookController::class, 'destroy'])->name('libros.destroy');
Route::get('/libros/{id}/delete', [BookController::class, 'confirmDelete'])->name('libros.confirmDelete');
