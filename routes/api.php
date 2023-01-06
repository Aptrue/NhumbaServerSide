<?php

use App\Http\Controllers\api\UserController;
use App\Models\Realstate;
use App\Models\Realtor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\RealStateCollection;
use App\Http\Resources\RealtorCollection;
use App\Http\Controllers\api\RealStateController;
use App\Models\User;

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


Route::get('/realstate/all', function(){
   $realstates=Realstate::all();
   return new RealStateCollection($realstates);
});

Route::get('/realtor/all', function(){
    $realstates=User::all();
    return new RealtorCollection($realstates);
 });

Route::post('/user/login', [UserController::class, 'loginUser']);
Route::post('/user/create', [UserController::class, 'createUser']);



Route::post('/realstate/store', [RealStateController::class, 'store']);





