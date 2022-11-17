<?php

use App\Http\Controllers\api\UserController;
use App\Models\Realstate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\RealStateCollection;

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


Route::get('/test', function(){
   $realstates=Realstate::all();
   return new RealStateCollection($realstates);
});

Route::post('/user/login', [UserController::class, 'loginUser']);
Route::post('/user/create', [UserController::class, 'createUser']);
