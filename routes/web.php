<?php

use Illuminate\Support\Facades\Route;

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
    return view('greeting', ['name' => 'James']);
});

//Route::get('/', function () {
//    return view('welcome');
//});


// Home
use App\Http\Controllers\HomeController;
Route::resource('/home', HomeController::class);

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::view('/tailwindcss', 'tailwindcss.index');
Route::view('/tailwindcss-tagged-alert', 'tailwindcss.tagged_alert');

/**
 * Titles
 */
Route::get('titles', 'TitleController@index');
