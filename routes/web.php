<?php

use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/pacientes', [PacienteController:: class, 'index'])->name('pacientes.index');
Route::post('/pacientes', [PacienteController::class, 'store'])->name('pacientes.store');
Route::get('/pacientes/create', [PacienteController::class, 'create'])->name('pacientes.create');
Route::delete('/pacientes/{paciente}', [PacienteController::class, 'destroy'])->name('pacientes.destroy');
Route::put('/pacientes/{paciente}', [PacienteController::class, 'update'])->name('pacientes.update');
Route::get('/pacientes/{paciente}/edit', [PacienteController::class , 'edit'])->name('pacientes.edit');
