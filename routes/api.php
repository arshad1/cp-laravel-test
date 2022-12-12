<?php

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('customer', [\App\Http\Controllers\CustomerController::class, 'index']);
Route::get('order', [\App\Http\Controllers\OrderController::class, 'index']);
Route::get('order/paginated', [\App\Http\Controllers\OrderController::class, 'paginated']);
Route::get('order/paginated/with-joins', [\App\Http\Controllers\OrderController::class, 'withJoins']);
