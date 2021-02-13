<?php

use App\Http\Controllers\{AstrologerController, OrderController};
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

Route::resource('astrologers', AstrologerController::class)->only(['index', 'show']);
Route::resource('orders', OrderController::class)->only(['store']);