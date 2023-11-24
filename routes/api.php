<?php

use App\Http\Controllers\Api\CrudApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('products',[CrudApiController::class,'index']);
Route::get('products/{id}',[CrudApiController::class,'show']);
Route::post('products',[CrudApiController::class,'store']);
Route::put('products/{id}',[CrudApiController::class,'update']);
Route::delete('products/{id}',[CrudApiController::class,'destroy']);

// Route::apiResource('products',CrudApiController::class);