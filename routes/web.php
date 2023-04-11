<?php

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

Route::get('/', [QuoteController::class, 'index'])->middleware([Language::class]);
Route::get('movie/{movie}', [MovieController::class, 'index'])->middleware([Language::class])->name('movie.get');


Route::middleware([Language::class])->group(function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('login', 'create');
        Route::post('login', 'login');
        Route::post('logout', 'logout')->middleware('auth');
    });
});

Route::prefix('admin')->middleware([Language::class, 'can:admin'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');

    Route::controller(AdminMovieController::class)->group(function () {
        Route::get('movies', 'index')->name('movies.show');
        Route::delete('movies/{movie}', 'destroy')->name('movie.destroy');
        Route::get('movie/create', 'create')->name('movie.create');
        Route::post('movie', 'store')->name('movie.store');
        Route::get('movies/{movie}/edit', 'edit')->name('movie.edit');
        Route::patch('movies/{movie}', 'update')->name('movie.update');
    });

    Route::controller(AdminQuoteController::class)->group(function () {
        Route::get('quotes', 'index')->name('quotes.show');
        Route::delete('quotes/{quote}', 'destroy')->name('quote.destroy');
        Route::get('quote/create', 'create')->name('quote.create');
        Route::post('quote', 'store')->name('quote.store');
        Route::get('quotes/{quote}/edit', 'edit')->name('quote.edit');
        Route::patch('quotes/{quote}', 'update')->name('quote.update');
    });
});
