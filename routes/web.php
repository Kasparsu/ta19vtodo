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

Route::get('/', [\App\Http\Controllers\ItemController::class, 'index']);
Route::get('/{code}', [\App\Http\Controllers\ItemController::class, 'code']);
Route::post('/{code}', [\App\Http\Controllers\ItemController::class, 'store']);
Route::get('/item/{item}/delete', [\App\Http\Controllers\ItemController::class, 'destroy']);
