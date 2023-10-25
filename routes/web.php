<?php

use Illuminate\Support\Facades\Route;


Route::get('/livros', function () {
    return view('livros');
}) -> name('livros.index');
