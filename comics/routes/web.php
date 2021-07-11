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

Route::get('/', function () {
    return view('home');
});
Route::get('/characters', function () {
    return 'characters page';
});

/* Comics Route */
Route::get('/comics', function () {
    $comics = config('comics.data');
    /* ddd($comics); */
    return view('comics', compact('comics'));
});

Route::get('/movies', function () {
    return 'movies page';
});
Route::get('/tv', function () {
    return 'tv page';
});
Route::get('/games', function () {
    return 'games page';
});
Route::get('/collectibles', function () {
    return 'collectibles page';
});
Route::get('/videos', function () {
    return 'videos page';
});
Route::get('/fans', function () {
    return 'fans page';
});
Route::get('/news', function () {
    return 'news page';
});
Route::get('/shop', function () {
    return 'shop page';
});
