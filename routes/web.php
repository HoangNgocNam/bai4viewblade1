<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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
    return view('backend.layout.master');
});
Route::prefix('/users')->group(function (){
    Route::get('/',[UserController::class,"index"])->name("users.index");
    Route::get('/{id}/detail',[UserController::class,"show"])->name("users.detail");
    Route::get('/{id}/delete',[UserController::class,"destroy"])->name("users.delete");
    Route::get('/create',[UserController::class,"create"])->name("users.create");
    Route::post('/create',[UserController::class,"store"]);
    Route::get('/{id}/update',[UserController::class,"edit"])->name("users.edit");
    Route::post('/{id}/update',[UserController::class,"update"])->name("users.update");
    Route::get('/search',[UserController::class,"search"])->name("users.search");
});

Route::get('/posts',[PostController::class,"index"])->name("posts.index");
//Route::get('/posts/{id}/detail',[PostController::class,"show"])->name("posts.detail");
Route::get('/posts/{id}/delete',[PostController::class,"destroy"])->name("posts.delete");
Route::get('/posts/create',[PostController::class,"create"])->name("posts.create");
Route::post('/posts/create',[PostController::class,"store"]);
Route::get('/posts/{id}/update',[PostController::class,"edit"])->name("posts.edit");
Route::post('/posts/{id}/update',[PostController::class,"update"])->name("posts.update");
//Route::get('/posts/search',[PostController::class,"search"])->name("posts.search");

