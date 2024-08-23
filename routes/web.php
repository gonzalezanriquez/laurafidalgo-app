<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\DocenteController;

Route::resource('docentes', DocenteController::class);
Route::resource('posts', PostController::class);

// Route::get('/docentes', function () {
//     return view('docentes');
// })->name('docentes');

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/docentes', function () {
//     return view('docentes');
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
