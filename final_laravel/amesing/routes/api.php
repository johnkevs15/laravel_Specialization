<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AmesingController;

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
 Route::get('amesing',[AmesingController::class,"index"]);
 Route::post('amesing',[AmesingController::class,"store"]);
 Route::delete('amesing/{amesing}',[AmesingController::class,"destory"]);
 Route::put('amesing/{amesing}',[AmesingController::class,"update"]);
 Route::get('amesing/{amesing}',[AmesingController::class,"show"]);

