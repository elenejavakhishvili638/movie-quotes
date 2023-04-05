<?php


// use App\Http\Controllers\AdminMovieController;

// use App\Http\Controllers\AdminMovieController;

use App\Http\Controllers\Admin\MovieController as AdminMovieController;
use App\Http\Controllers\Session\AuthController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\QuoteController;
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


Route::get('login', [AuthController::class, 'create']);
Route::post('login', [AuthController::class, 'store']);


Route::middleware(['can:admin'])->group(function () {

    Route::get('admin/movies', [AdminMovieController::class, 'index']);
    Route::delete('admin/movies/{movie}', [AdminMovieController::class, 'destroy'])->name('movie.destory');
    Route::get('admin/movie/create', [AdminMovieController::class, 'create'])->name('movie.create');
    Route::post('admin/movie', [AdminMovieController::class, 'store'])->name('movie.store');
});
