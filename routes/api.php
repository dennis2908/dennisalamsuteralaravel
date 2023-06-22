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

use App\Http\Controllers\MroleController;

use App\Http\Controllers\MbarangController;

use App\Http\Controllers\McustomerController;

use App\Http\Controllers\MuserController;

use App\Http\Controllers\TorderController;



Route::group(['middleware' => ['jwt.verify']], function() {

Route::resource('role', MroleController::class);

Route::resource('user', MuserController::class);

Route::resource('barang', MbarangController::class);

Route::resource('customer', McustomerController::class);

Route::resource('order', TorderController::class);

Route::put('role/assign/{id}', [MroleController::class, 'updateAssign']);

});

Route::post('user/login', [MuserController::class, 'doLogin']);
