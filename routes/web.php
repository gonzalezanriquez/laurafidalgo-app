<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\ClasesController;
use App\Http\Controllers\SobremiController;
use App\Http\Controllers\MessageController;


Route::resource('docentes', DocenteController::class);
Route::resource('posts', PostController::class);
Route::resource('clases', ClasesController::class);



Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobremi', [SobremiController::class, 'show'])->name('sobremi.show');


Route::get('/clases-public', [ClasesController::class, 'publicIndex'])->name('clases.public');
Route::get('/docentes-public', [DocenteController::class, 'publicIndex'])->name('docentes.public');

Route::middleware([ 'auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    
    Route::get('/dashboard', function () {return view('dashboard');})->name('dashboard');
    Route::resource('clasess', ClasesController::class);

    Route::get('/mensajes', [MessageController::class, 'index'])->name('messages.index');
    Route::get('/mensajes/{message}', [MessageController::class, 'show'])->name('messages.show');
    Route::delete('/mensajes/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');
    Route::post('/mensajes', [MessageController::class, 'store'])->name('messages.store');


});
