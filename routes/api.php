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

Route::get('employees', 'EmployeeController@index');
Route::get('employee/{id}', 'EmployeeController@show');
Route::post('employee', 'EmployeeController@store');
Route::put('employee/{id}', 'EmployeeController@update');
Route::delete('employee/{id}', 'EmployeeController@destroy');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
