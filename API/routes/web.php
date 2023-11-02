<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SegurosController;

Route::get('/seguros', [SegurosController::class, 'index']);
Route::post('/seguros', [SegurosController::class, 'store']);

