<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
Route::get('/contacts/create', [ContactController::class, 'create'])->name('create');
Route::post('/contacts', [ContactController::class, 'store'])->name('store');
Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('show');
Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('edit');
Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('update');
Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('destroy');
