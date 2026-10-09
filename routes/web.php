<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lapor', [LaporBanjirController::class, 'create'])->name('lapor.create');
Route::post('/lapor/konfirmasi', [LaporBanjirController::class, 'store'])->name('lapor.store');
Route::get('/lapor/daftar', [LaporBanjirController::class, 'index'])->name('lapor.index');