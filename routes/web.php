<?php

use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [QuoteController::class, 'get']);
Route::get('movie/{movie}', [MovieController::class, 'get'])->name('movie.get');


Route::get('login', [SessionController::class, 'create']);
Route::post('login', [SessionController::class, 'store']);


Route::get('admin/movies', [AdminMovieController::class, 'index'])->name('admin.index');
