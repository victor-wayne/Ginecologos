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

Route::get('/contacto', [
    'as' => 'contacto',
    'uses' => 'GinecologosController@contacto'
]);
Route::get('/afiliate', [
    'as' => 'afiliate',
    'uses' => 'GinecologosController@afiliacion'
]);

Route::get('/blog', [
    'as' => 'blog',
    'uses' => 'GinecologosController@blog'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/paypal/pay', 'PaymentController@payWithPayPal');
Route::get('/paypal/status', 'PaymentController@payPalStatus');

Route::group(['middleware' => ['auth','role:administrador']], function () {
    Route::get('/admin','Administrador\AdministradorController@index')->name('administrador');
    Route::get('/admin/curso/{id?}', 'Administrador\AdministradorController@curso');    
    Route::get('/admin/curso/{idcurso}/form', 'Administrador\AdministradorController@cursoform')->name('cursoform');    
    Route::get('/admin/curso/{idcurso}/tema/{idtema?}/form', 'Administrador\AdministradorController@temacursoform')->name('temacursoform');    
    Route::post('/admin/curso/save', 'Administrador\AdministradorController@save')->name('savecurso');
    Route::post('/admin/curso/tema/save', 'Administrador\AdministradorController@savetema')->name('savetema');    
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/suscriptor','Suscriptor\SuscriptorController@index')->name('suscriptor');    
    Route::get('/suscriptor/curso/{id}', 'Suscriptor\SuscriptorController@curso');
    Route::get('/suscriptor/paypal/pay', 'Suscriptor\PaymentController@payWithPayPal');
    Route::get('/suscriptor/paypal/status', 'Suscriptor\PaymentController@payPalStatus');
});
