<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
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
    return view('welcome');
})->name('index');

// Route::get('/hallo', 'PostController@hallo');
Route::get('/hallo', [PostController::class, 'hallo']);

Route::get('/test', [TestController::class, 'test'])->name('test');

// {name}
Route::get('/welcome/{name?}', [TestController::class, 'welcome']);

// Route::prefix('/post')->group(function () {

//     Route::get('/create', [PostController::class, 'create'])->name('post.create');
//     Route::post('/store', [PostController::class, 'store'])->name('post.store');

//     Route::get('/list', [PostController::class, 'list'])->name('post.list');

// });

Route::resource('post', PostController::class);

Route::resource('comment', CommentController::class)->only(['store']);

Route::resource('category', CategoryController::class)->only(['store']);
