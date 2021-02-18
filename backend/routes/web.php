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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('posts.index');

Route::get('/posts/search', [App\Http\Controllers\PostController::class, 'search'])->name('posts.search');

Route::resource('/posts', 'App\Http\Controllers\PostController', ['except' => ['index']]);
Route::resource('/users', 'App\Http\Controllers\UserController');
Route::resource('/comments', 'App\Http\Controllers\CommentController')->middleware('auth');