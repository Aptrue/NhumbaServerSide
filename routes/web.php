<?php

use App\Models\Realstate;
use App\Models\Realtor;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\web\RealStateController;


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

    // 192.168.133.187
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum'])->group(function () {

    Route::get('realstate', [RealStateController::class, 'index']);
    Route::get('realstate/create/index', [RealStateController::class, 'create'])->name('realstate.create.index');
    Route::post('realstate/create/store', [RealStateController::class, 'store'])->name('realstate.store');
});
