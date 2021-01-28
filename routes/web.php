<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayersController;
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
    return view('welcome');
});

Route::get('/about', function () { return view('about');});

Route::get('/news', function () { return view('news');});

Route::get('/contact', function () { return view('contact');});

Route::get('/fixtures', function () { return view('fixtures');});

Route::get('/players/', [PlayersController::class, 'index']);
Route::get('/players/{player}', [PlayersController::class, 'show']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
