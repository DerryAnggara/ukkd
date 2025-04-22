<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dController;

Route::get('/', [dController::class, 'index'])->name("d.welcome");

Route::get('/create', function () {
    return view('create');
})->name("d.create");

Route::post('/create', [dController::class, 'store']) ->name("store");
Route::get('/update/{id}', [dController::class, 'edit'])->name("d.update");
Route::post('/update', [dController::class, 'updateData']) ->name("d.updateData");
Route::post('/delete/{id}', [dController::class, 'delete'])->name('d.delete');
Route::get('/complete/{id}', [dController::class, 'complete'])->name('complete');
Route::get('/history', [dController::class, 'history'])->name('d.history');

