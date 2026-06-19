<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VakController; 

Route::get('/test_vak', [VakController::class, 'mostrarTest'])->name('testvak.mostrar');
Route::post('/test_vak', [VakController::class, 'procesarTest'])->name('testvak.store');
Route::get('/test_vak/resultados', [VakController::class, 'mostrarResultados'])->name('testvak.resultados');

