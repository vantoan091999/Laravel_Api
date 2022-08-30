<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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
Route::get('/' , [CustomerController::class, 'index']);
Route::get('/{id}' , [CustomerController::class, 'show']);
Route::post('/' , [CustomerController::class, 'store']);
Route::put('/{id}' , [CustomerController::class, 'update']);
Route::delete('/{id}' , [CustomerController::class, 'delete']);



