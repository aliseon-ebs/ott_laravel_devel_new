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

// ajax

Route::prefix('ajax')->group(function () {

    Route::post('/nickname/check', 'AjaxController@nickname_check')->name('ajax_nickname_check');
    Route::post('/email/check', 'AjaxController@email_check')->name('ajax_email_check');
    Route::post('/phonenum/check', 'AjaxController@phonenum_check')->name('ajax_phonenum_check'); 

});

// ajax