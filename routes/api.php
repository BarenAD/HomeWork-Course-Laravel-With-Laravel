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
Route::middleware('check-api')->group(function ()
{
    Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });

    Route::get('/', function () {
        return view('welcome');
    });

    Route::prefix('test')->group(function () {
        Route::get('/one', 'TestController@getOne');
        Route::post('/one', 'TestController@setOne');

        Route::prefix('table')->group(function () {
            Route::get('/get-by-id/{id}', 'MegaController@get_test_by_id');
        });
    });
});
