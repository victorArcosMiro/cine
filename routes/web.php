<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\LeadActorController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\GenreController;
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



Route::get('/', [MovieController::class, 'index'])->name('movie.index');
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('movie.show');

Route::get('/novedades', [MovieController::class, 'showNovedades'])->name('movie.showNovedades');

Route::get('/proximos-estrenos', [MovieController::class, 'showEstrenos'])->name('movie.showEstrenos');

Route::get('/genero/{genero}', [MovieController::class, 'showPorGenero'])->name('movie.genero');



