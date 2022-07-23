<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/create-post',[PostsController::class, 'createPost']);

Route::get('/posts',[PostsController::class, 'readAllPosts'])->name('posts');

Route::get('/post/{id}',[PostsController::class, 'readPost']);

Route::put('/post/{id}',[PostsController::class, 'updatePost']);
Route::delete('/post/{id}',[PostsController::class, 'deletePost'] );
