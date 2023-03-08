<?php

use App\Http\Controllers\Computadoras;
use Illuminate\Support\Facades\Route;

// vista inicio
Route::get('/',[Computadoras::class, 'index'])->name('inicio');

// vista crear
Route::get('/crear',[Computadoras::class, 'create'])->name('nuevo');
// guardar
Route::post('/store',[Computadoras::class, 'store'])->name('store');

// vista editar
Route::get('/editar/{id}',[Computadoras::class, 'edit'])->name('editar');
// actualizar
Route::put('/update/{id}',[Computadoras::class, 'update'])->name('actualizar');

// eliminar
Route::delete('/delete/{id}',[Computadoras::class, 'destroy'])->name('eliminar');