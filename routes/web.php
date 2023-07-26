<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Restocontroller;
use App\Http\Middleware\CustomAuth;

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

/*Route::get('/', function () {
    return view('home');
});*/

Route::group(['middleware'=>"web"],function(){

	Route::get('/', [Restocontroller::class, 'index']);
	Route::get('/list', [Restocontroller::class, 'list']);
	Route::get('/delete/{id}', [Restocontroller::class, 'delete']);
	Route::get('/edit/{id}', [Restocontroller::class, 'edit']);
	Route::post('/edit/{id}', [Restocontroller::class, 'update']);
	Route::view('/register', ['register']);
	Route::post('/register', [Restocontroller::class, 'register']);
	Route::view('/login', ['login']);
	Route::post('/login', [Restocontroller::class, 'login']);
	Route::get('/logout', [Restocontroller::class, 'logout']);
	Route::get('/profile', [Restocontroller::class, 'profile']);

});


