<?php

use App\Http\Controllers\LivroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('livros', [LivroController::class, 'index']);
Route::get('livros/{id}' , [LivroController::class, 'show']);
Route::post('livros', [LivroController::class, 'store']);
Route::put('livros/{id}' , [LivroController::class, 'update']);
Route::delete('livros/{id}' , [LivroController::class, 'destroy']);