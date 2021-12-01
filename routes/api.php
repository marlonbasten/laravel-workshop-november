<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/test', [ApiController::class, 'test']);

//// Alle posts bekommen
//Route::get('/post', [\App\Http\Controllers\PostController::class, 'index']);
//// Einen post bekommen
//Route::get('/post/{id}', [\App\Http\Controllers\PostController::class, 'show']);
//// Einen post erstellen
//Route::post('/post', [\App\Http\Controllers\PostController::class, 'store']);
//// Einen post updaten
//Route::patch('/post/{id}', [\App\Http\Controllers\PostController::class, 'update']);
//// Einen post löschen
//Route::delete('/post/{id}', [\App\Http\Controllers\PostController::class, 'destroy']);