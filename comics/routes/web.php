<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */
/* Home Route */
Route::get('/', function () {
    return view('home');
})->name('home');

/* Characters Route */
Route::get('/characters', function () {
    return 'characters page';
})->name('characters');

/* Comics Route */
Route::get('/comics', function () {
    $comics = config('comics.data');
    /* ddd($comics); */
    return view('comics', compact('comics'));
})->name('comics');

Route::get('comics/{id}', function($id){
    $comics = config('comics.data');
    return view('comics.index', compact('comics'));
})->name('comics');

/* Movies Route */
Route::get('/movies', function () {
    return 'movies page';
})->name('movies');

/* TV Route */
Route::get('/tv', function () {
    return 'tv page';
})->name('tv');

/* Games Route */
Route::get('/games', function () {
    return 'games page';
})->name('games');

/* Collectibles Route */
Route::get('/collectibles', function () {
    return 'collectibles page';
})->name('collectibles');

/* Videos Route */
Route::get('/videos', function () {
    return 'videos page';
})->name('videos');

/* Fans Route */
Route::get('/fans', function () {
    return 'fans page';
})->name('fans');

/* News Route */
Route::get('/news', function () {
    return 'news page';
})->name('news');

/* Shop Route */
Route::get('/shop', function () {
    return 'shop page';
})->name('shop');

