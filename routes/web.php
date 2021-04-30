<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\SunderlandPlayersController;
use App\Http\Controllers\SunderlandSquadController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SunderlandMatchReportsController;
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
Route::get('/about/create', [aboutController::class, 'create']);

Route::get('/news', function () { return view('news');});


Route::get('/contact', function () { return view('contact');});
Route::get('/contact/create', [ContactsController::class, 'create']);

Route::get('/fixtures', function () { return view('fixtures');});


Route::get('football/sunderland/players', [SunderlandPlayersController::class,'index']);
Route::get('football/sunderland/players/create', [SunderlandPlayersController::class,'create']);
Route::post('football/sunderland/players', [SunderlandPlayersController::class, 'store']);
Route::get('football/sunderland/players/{player}/edit', [SunderlandPlayersController::class, 'edit']);
Route::put('football/sunderland/players/{player}/update', [SunderlandPlayersController::class, 'update']);
Route::get('football/sunderland/players/{player}', [SunderlandPlayersController::class, 'show']);
Route::delete('football/sunderland/players/{player}', [SunderlandPlayersController::class, 'destroy'])->middleware('auth');


Route::get('football/sunderland/squad', [SunderlandSquadController::class,'index']);
Route::get('football/sunderland/squad/create', [SunderlandSquadController::class,'create']);
Route::post('football/sunderland/squad', [SunderlandSquadController::class, 'store']);
Route::get('football/sunderland/squad/{squad}/edit', [SunderlandSquadController::class, 'edit']);
Route::put('football/sunderland/squad/{squad}/update', [SunderlandSquadController::class, 'update']);
Route::delete('football/sunderland/squad', [SunderlandSquadController::class, 'destroy'])->middleware('auth');


Route::get('football/sunderland/reports', [SunderlandMatchReportsController::class,'index']);
Route::get('football/sunderland/reports/create', [SunderlandMatchReportsController::class,'create']);
Route::post('football/sunderland/reports', [SunderlandMatchReportsController::class, 'store']);
Route::get('football/sunderland/reports/{report}/edit', [SunderlandMatchReportsController::class, 'edit']);
Route::put('football/sunderland/reports/{report}/update', [SunderlandMatchReportsController::class, 'update']);
Route::get('football/sunderland/reports/{report}', [SunderlandMatchReportsController::class, 'show']);
Route::delete('football/sunderland/reports', [SunderlandMatchReportsController::class, 'destroy'])->middleware('auth');


Route::get('football/kenya/players', [KenyaPlayersController::class,'index']);
Route::get('football/kenya/players/create', [KenyaPlayersController::class,'create']);
Route::post('football/kenya/players', [KenyaPlayersController::class, 'store']);
Route::get('football/kenya/players/{player}/edit', [KenyaPlayersController::class, 'edit']);
Route::put('football/kenya/players/{player}/update', [KenyaPlayersController::class, 'update']);
Route::get('football/kenya//players/{player}', [KenyaPlayersController::class, 'show']);
Route::delete('football/kenya/players/{player}', [KenyaPlayersController::class, 'destroy'])->middleware('auth');





Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/create', [NewsController::class, 'create']);
Route::get('/news/{slug}', [NewsController::class, 'show']);
Route::post('/news', [NewsController::class, 'store']);
Route::post('/news/create',[NewsController::class, 'upload']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
