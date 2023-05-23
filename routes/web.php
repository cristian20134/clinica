<?php

use App\Http\Controllers\AtencionController;
use App\Http\Controllers\FichaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GeneroController;

Route::get('/', function () {

    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/show/{atencion}', [AtencionController::class, 'show'])->name('atencion.show');
Route::get('/add/{atencion}', [AtencionController::class, 'add'])->name('atencion.add');
Route::get('/uss/{atencion}', [AtencionController::class, 'uss'])->name('atencion.uss');

Route::get('/create', [FichaController::class, 'create'])->name('ficha.create');
Route::post('/store', [FichaController::class, 'store'])->name('ficha.store');
Route::get('/edit/{info}', [FichaController::class, 'edit'])->name('ficha.edit');
Route::put('/update/{info}', [FichaController::class, 'update'])->name('ficha.update');
Route::get('/ficha/delete/{info}', [FichaController::class, 'delete'])->name('ficha.delete');
Route::get('/ficha/restore/{info}', [FichaController::class, 'restore'])->name('ficha.restore');

Route::get('/create2', [AtencionController::class, 'create2'])->name('atencion.create');
Route::post('/store2', [AtencionController::class, 'store2'])->name('atencion.store');
Route::get('/edit2/{atencion}', [AtencionController::class, 'edit2'])->name('atencion.edit');
Route::put('/update2/{atencion}', [AtencionController::class, 'update2'])->name('atencion.update');
Route::get('/atencion/delete/{atencion}', [AtencionController::class, 'delete'])->name('atencion.delete');
Route::get('/atencion/restore/{atencion}', [AtencionController::class, 'restore'])->name('atencion.restore');

Route::get('/genero/create', [GeneroController::class, 'create'])->name('genero.create');
Route::post('/genero/store', [GeneroController::class, 'store'])->name('genero.store');
Route::get('/genero/edit/{info}', [GeneroController::class, 'edit'])->name('genero.edit');
Route::put('/genero/update/{info}', [GeneroController::class, 'update'])->name('genero.update');
Route::get('/genero/delete/{info}', [GeneroController::class, 'delete'])->name('genero.delete');
Route::get('/genero/restore/{info}', [GeneroController::class, 'restore'])->name('genero.restore');
