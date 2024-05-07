<?php

use App\Http\Controllers\CepController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ComidaController;
use App\Http\Controllers\FeatureController;
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

Route::get('/', function () {
    return redirect('/products');
});

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
    Route::post('/', [ProductController::class, 'store'])->name('products.store');
    Route::get('/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/{id}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
});

Route::prefix('features')->group(function () {
    Route::get('/', [FeatureController::class, 'index'])->name('features.index');
});

Route::get('/cep', [CepController::class, 'index'])->name('cep.index');
Route::post('/cep', [CepController::class, 'search'])->name('cep.search');
