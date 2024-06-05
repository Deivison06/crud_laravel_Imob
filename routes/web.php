<?php

use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'imoveis'], function() {
    Route::get('/', [PropertyController::class, 'index'])->name('imoveis.index');
    Route::get('/novo', [PropertyController::class, 'create'])->name('create.imovel.form');
    Route::post('/store', [PropertyController::class, 'store'])->name('create.imovel');
    Route::get('/{slug}', [PropertyController::class, 'show'])->name('show.imovel.form');
    Route::get('/editar/{slug}', [PropertyController::class, 'edit'])->name('edit.imovel.form');
    Route::put('/update/{slug}', [PropertyController::class, 'update'])->name('update.imovel.form');
    Route::delete('/{slug}', [PropertyController::class, 'remove'])->name('remove.imovel');
});
