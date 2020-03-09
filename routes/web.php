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
    return view('pages/home');
});
Route::get('/home', function () {
    return view('pages/home');
});
Route::get('/services', function () {
    return view('pages/services');
});
Route::get('/contact', function () {
    return view('pages/contact');
});
Auth::routes();

Route::post('/contact/submit','ContactController@message');
Route::get('/services/standard','ServicesController@standard');
Route::get('/services/pro','ServicesController@pro');
Route::get('/services/enterprise','ServicesController@enterprise');
Route::get('/confirmation','ServicesController@confirmation');

Route::post('/confirmation/{userId}/{serviceId}','ServicesController@accept');


