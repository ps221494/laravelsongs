<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\BandController;
use App\Http\Controllers\AlbumController;
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

Route::get('/songs',[SongController::class,'index'])->middleware('auth'); 
    Route::resource('songs', SongController::class);

    Route::get('/albums',[AlbumController::class,'albums.index']); 
    Route::resource('albums', AlbumController::class);

    Route::get('/bands',[BandController::class,'bands.index']); 
    Route::resource('bands', BandController::class);


Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
