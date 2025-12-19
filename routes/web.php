<?php
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::prefix('animals')->group(function () {
    Route::get('/creer', [AnimalController::class, 'create'])->name('animal.create');
    Route::get('/modifier/{id}', [AnimalController::class, 'update'])->name('animal.update');
    Route::get('/supprimer/{id}', [AnimalController::class, 'delete'])->name('animal.delete');
    Route::get('/{id}', [AnimalController::class, 'show'])->name('animal.show');
});
Route::fallback(function () {
    return view('errors.not-found');
});