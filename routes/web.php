<?php


// use App\Http\Controllers\AdminMovieController;

// use App\Http\Controllers\AdminMovieController;

use App\Http\Controllers\Admin\MovieController as AdminMovieController;
use App\Http\Controllers\Admin\QuoteController as AdminQuoteController;
use App\Http\Controllers\LanguageController;
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

Route::post('/lang/{lang}', [LanguageController::class, 'switchLang'])->name('setLanguage');

Route::get('/', [QuoteController::class, 'get'])->middleware([Language::class]);
Route::get('movie/{movie}', [MovieController::class, 'get'])->middleware([Language::class])->name('movie.get');


Route::get('login', [AuthController::class, 'create'])->middleware([Language::class]);
Route::post('login', [AuthController::class, 'login'])->middleware([Language::class]);
Route::post('logout', [AuthController::class, 'logout'])->middleware([Language::class])->middleware('auth');



Route::prefix('admin')->middleware([Language::class, 'can:admin'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::get('movies', [AdminMovieController::class, 'index'])->name('movies.show');

    Route::delete('movies/{movie}', [AdminMovieController::class, 'destroy'])->name('movie.destroy');

    Route::get('movie/create', [AdminMovieController::class, 'create'])->name('movie.create');
    Route::post('movie', [AdminMovieController::class, 'store'])->name('movie.store');

    Route::get('movies/{movie}/edit', [AdminMovieController::class, 'edit'])->name('movie.edit');
    Route::patch('movies/{movie}', [AdminMovieController::class, 'update'])->name('movie.update');


    Route::get('quotes', [AdminQuoteController::class, 'index'])->name('quotes.show');

    Route::delete('quotes/{quote}', [AdminQuoteController::class, 'destroy'])->name('quote.destroy');

    Route::get('quote/create', [AdminQuoteController::class, 'create'])->name('quote.create');
    Route::post('quote', [AdminQuoteController::class, 'store'])->name('quote.store');

    Route::get('quotes/{quote}/edit', [AdminQuoteController::class, 'edit'])->name('quote.edit');
    Route::patch('quotes/{quote}', [AdminQuoteController::class, 'update'])->name('quote.update');
});
