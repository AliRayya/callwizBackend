<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CallController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/call', [CallController::class, 'index']);