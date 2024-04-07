<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ComidaController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

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

Route::get('/service/{id}', [SiteController::class, 'index']);
Route::get('/comidas', [ComidaController::class, 'index'])->name('comidas.index');
Route::get('/comidas/{id}', [ComidaController::class, 'show'])->name('comidas.show');

Route::prefix('clients')->group(function () {
    Route::get('/', [ClientController::class, 'index'])->name('clients.index');
    Route::get('/create', [ClientController::class, 'create'])->name('clients.create');
    Route::get('/{id}', [ClientController::class, 'show'])->name('clients.show');
    Route::post('/', [ClientController::class, 'store'])->name('clients.store');
    Route::get('/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
    Route::put("/{id}", [ClientController::class, 'update'])->name('clients.update');
    Route::delete("/{id}", [ClientController::class, 'destroy'])->name('clients.destroy');
});

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::get('/{id}', [ProductController::class, 'show'])->name('products.show');
});
