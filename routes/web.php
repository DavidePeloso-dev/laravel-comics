<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/movies', [PagesController::class, 'movies'])->name('movies');

Route::get('/characters', [PagesController::class, 'incomplete'])->name('characters');

Route::get('/games', [PagesController::class, 'incomplete'])->name('games');

Route::get('/tv', [PagesController::class, 'incomplete'])->name('tv');

Route::get('/collectibles', [PagesController::class, 'incomplete'])->name('collectibles');

Route::get('/news', [PagesController::class, 'incomplete'])->name('news');

Route::get('/shop', [PagesController::class, 'incomplete'])->name('shop');

Route::get('/videos', [PagesController::class, 'incomplete'])->name('videos');

Route::get('/fans', [PagesController::class, 'incomplete'])->name('fans');

/* real routes from there*/

Route::get('/', [PagesController::class, 'index']);

Route::get('/comics', [PagesController::class, 'comics'])->name('comics');
