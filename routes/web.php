<?php

use App\Http\Controllers\ProyectoController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::resource("projects", ProyectoController::class);

Route::get('/projects', [ProyectoController::class, 'index'])->name('proyecto.index');
Route::get('/projects/create', [ProyectoController::class, 'create'])->name('proyecto.create');
Route::post('/projects', [ProyectoController::class, 'store'])->name('proyecto.store');
Route::get('/projects/{proyecto}/edit', [ProyectoController::class, 'edit'])->name('proyecto.edit');
Route::put('/projects/{proyecto}/update', [ProyectoController::class, 'update'])->name('proyecto.update');
Route::delete('/projects/{proyecto}/destroy', [ProyectoController::class, 'destroy'])->name('proyecto.destroy');
Route::delete('/projects/{id}', [ProyectoController::class, 'destroy'])->name('proyecto.destroy');