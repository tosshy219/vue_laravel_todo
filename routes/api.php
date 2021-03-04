<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodoController;


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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// TODO一覧取得APIのためのルーティング.vue-routerでTaskListComponentを見せている時
Route::get('/todos',[TodoController::class,'index']);
Route::post('/todos',[TodoController::class,'store']);
Route::get('/todos/{todo}',[TodoController::class,'edit']);
Route::delete('/todos/{todo}',[TodoController::class,'destroy']);
