<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;
use App\Http\Controllers\MusicController;
// use App\Http\Controllers\AuthController;

// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/register', [AuthController::class, 'register']);
// Route::middleware('auth:api')->post('/logout', [AuthController::class, 'logout']);

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/songs', [SongController::class, 'index']);
Route::middleware('auth:api')->post('/play', [MusicController::class, 'play']);
Route::middleware('auth:api')->post('/pause', [MusicController::class, 'pause']);
Route::middleware('auth:api')->post('/next', [MusicController::class, 'next']);
Route::middleware('auth:api')->post('/previous', [MusicController::class, 'previous']);
Route::middleware('auth:api')->post('/random-play', [MusicController::class, 'randomPlay']);