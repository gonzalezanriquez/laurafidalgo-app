<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\ClasesController;

Route::resource('docentes', DocenteController::class);
Route::resource('posts', PostController::class);
Route::resource('clases', ClasesController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/laura', function () {
    return view('laura');
});
// Route::get('/clases', function () {
//     return view('clases');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
