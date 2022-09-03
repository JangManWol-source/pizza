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

Route::get('/', 'App\Http\Controllers\PizzaController@index');
Route::get('/pizza/create', 'App\Http\Controllers\PizzaController@create');
Route::get('/pizza/{id}', 'App\Http\Controllers\PizzaController@show');
