<?php

use App\Http\Controllers\DoaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuranController;
use App\Http\Controllers\TahlilController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('beranda');
Route::get('/al-quran', [QuranController::class, 'index'])->name('quran.index');
Route::get('/al-quran/{surah}', [QuranController::class, 'show'])->whereNumber('surah')->name('quran.show');
Route::get('/tahlil', [TahlilController::class, 'index'])->name('tahlil.index');
Route::get('/tahlil/{urutan}', [TahlilController::class, 'show'])->whereNumber('urutan')->name('tahlil.show');
Route::get('/doa', [DoaController::class, 'index'])->name('doa.index');
Route::get('/doa/{slug}', [DoaController::class, 'show'])->name('doa.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
