<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoVidroController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('produtos', ProdutoVidroController::class);
