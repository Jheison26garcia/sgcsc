<?php

use App\Http\Controllers\CitaController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProfesionalController;
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


Route::get('/profesionales', [ProfesionalController:: class, 'index'])->name('profesionales.index');
Route::post('/profesionales', [ProfesionalController::class, 'store'])->name('profesionales.store');
Route::get('/profesionales/create', [ProfesionalController::class, 'create'])->name('profesionales.create');
Route::delete('/profesionales/{profesional}', [ProfesionalController::class, 'destroy'])->name('profesionales.destroy');
Route::put('/profesionales/{profesional}', [ProfesionalController::class, 'update'])->name('profesionales.update');
Route::get('/profesionales/{profesional}/edit', [ProfesionalController::class , 'edit'])->name('profesionales.edit');

Route::get('/citas', [CitaController:: class, 'index'])->name('citas.index');
Route::post('/citas', [CitaController::class, 'store'])->name('citas.store');
Route::get('/citas/create', [CitaController::class, 'create'])->name('citas.create');
Route::delete('/citas/{cita}', [CitaController::class, 'destroy'])->name('citas.destroy');
Route::put('/citas/{cita}', [CitaController::class, 'update'])->name('citas.update');
Route::get('/citas/{cita}/edit', [CitaController::class , 'edit'])->name('citas.edit');