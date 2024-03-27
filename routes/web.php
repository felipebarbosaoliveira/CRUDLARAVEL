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
/*
Route::get('/carros',[CrudController::class, 'index'])->name('carros.index');
Route::get('/carros/create',[CrudController::class, 'create'])->name('carros.create');
Route::post('/carros',[CrudController::class, 'store'])->name('carros.store');
Route::get('/carros/{carro}',[CrudController::class, 'show'])->name('carros.show');
Route::get('/carros/{carro}/edit',[CrudController::class, 'edit'])->name('carros.edit');
Route::put('/carros/{carro}',[CrudController::class, 'update'])->name('carros.update');
Route::delete('/carros/{carro}',[CrudController::class, 'destroy'])->name('carros.destroy');
*/
Route::resource('carros', CrudController::class);

