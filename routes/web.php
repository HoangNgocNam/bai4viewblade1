<?php

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
Route::get('/users',[UserController::class,"index"])->name("users.index");
Route::get('/users/{id}/detail',[UserController::class,"show"])->name("users.detail");
Route::get('/users/{id}/delete',[UserController::class,"destroy"])->name("users.delete");
Route::get('/users/create',[UserController::class,"create"])->name("users.create");
Route::post('/users/create',[UserController::class,"store"]);
Route::get('/users/{id}/update',[UserController::class,"edit"])->name("users.edit");
Route::post('/users/{id}/update',[UserController::class,"update"])->name("users.update");
Route::get('/users/search',[UserController::class,"search"])->name("users.search");
