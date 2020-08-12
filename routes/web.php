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

Route::get('/', [
    'as' => 'home',
    'uses' => 'GinecologosController@index'
]);

Route::get('/nosotros', [
    'as' => 'nosotros',
    'uses' => 'GinecologosController@nosotros'
]);

Route::get('/afiliate', [
    'as' => 'afiliate',
    'uses' => 'GinecologosController@afiliacion'
]);