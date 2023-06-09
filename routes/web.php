<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\site\SiteController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {

    Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');
    Route::put('/clients/{id}', [ClientController::class, 'update'])->name('clients.update');
    Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
    Route::get('/clients', [ClientController::class, 'index'])->name('clients.index');
    Route::get('clients/create', [ClientController::class, 'create'])->name('clients.create');
    Route::post('clients', [ClientController::class, 'store'])->name('clients.store');
    Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');

    Route::get('/admin', [AdminController::class, 'index'])->name('dashboard.index');

});

Route::get('/', [SiteController::class, 'index'])->name('home.index');

require __DIR__.'/auth.php';
