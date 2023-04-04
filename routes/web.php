<?php


// use App\Http\Controllers\AdminMovieController;

// use App\Http\Controllers\AdminMovieController;

use App\Http\Controllers\Admin\AdminMovieController;
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


Route::get('admin/movies', [AdminMovieController::class, 'index'])->middleware(['can:admin']);
Route::delete('admin/movies/{movie}', [AdminMovieController::class, 'destroy'])->name('movie.destory')->middleware(['can:admin']);
