<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) { return $request->user();});

Route::get('stockmaster', 'StockMasterController@index');
Route::get('stockmaster/{id}', 'StockMasterController@show');

Route::get('session/{id}', 'StockSessionController@index');
Route::get('stockvol', 'StockVolController@index');

Route::get('stockrevup', 'ReversalUpController@index');
Route::get('stockrevdown', 'ReversalDownController@index');
Route::get('stockressup/{id}', 'StockResSupController@show');

Route::get('stockup', 'StockBullController@index');
Route::get('stockup1', 'StockBull1Controller@index');
Route::get('stockup2', 'StockBull2Controller@index');
Route::get('stockup3', 'StockBull3Controller@index');

Route::get('stockdown', 'StockBearController@index');
Route::get('stockdown1', 'StockBear1Controller@index');
Route::get('stockdown2', 'StockBear2Controller@index');
Route::get('stockdown3', 'StockBear3Controller@index');