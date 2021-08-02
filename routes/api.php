<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//use UserController;

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

use App\Http\Controllers\TagController;
Route::resource('/tag', TagController::class);

// 最近使用
use App\Http\Controllers\RecentlyTagsController;
Route::get('/recently-tags/view', [RecentlyTagsController::class, 'view']);
Route::resource('/recently-tags', RecentlyTagsController::class);


use App\Http\Controllers\TargetObjectController;
Route::resource('/target', TargetObjectController::class);



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


use App\Http\Controllers\UserController;
Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/users/ok', [UserController::class, 'return_ok']);

Route::get('/get-users', function (Request $request) {
    return $request->user();
});



Route::get('/flight', function (Request $request) {

    $flight = new Flight;

    $flight->name = '$request->name';

    $flight->save();

    return $flight;
});

