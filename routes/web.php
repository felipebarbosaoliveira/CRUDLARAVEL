<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class, 'index'])->name('home');
Route::get('/carros',[CrudController::class, 'index'])->name('carros.index');
Route::get('/carros/create',[CrudController::class, 'create'])->name('carros.create');
Route::post('/carros',[CrudController::class, 'store'])->name('carros.store');
Route::post('/carros{carros}',[CrudController::class, 'show'])->name('carros.show');
Route::post('/carros{carros}/edit',[CrudController::class, 'edit'])->name('carros.edit');
Route::put('/carros/{carros}',[CrudController::class, 'update'])->name('carros.update');
Route::delete('/carros/{carros}',[CrudController::class, 'destroy'])->name('carros.destroy');
