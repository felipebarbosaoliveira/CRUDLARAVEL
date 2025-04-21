<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/',[HomeController::class, 'index'])->name('home');
Route::resource('carros', CrudController::class);


use App\Http\Controllers\UserController;

Route::prefix('usuarios')->name('users.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');  // Rota para listar os usuários
    Route::get('create', [UserController::class, 'create'])->name('create');  // Rota para mostrar o formulário de cadastro de usuário
    Route::post('store', [UserController::class, 'store'])->name('store');  // Rota para armazenar o usuário
});

