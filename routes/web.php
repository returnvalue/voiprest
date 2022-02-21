<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('phones', 'PhoneController');
/*
|--------------------------------------------------------------------------
Verb          URI                   Action       Route Name
GET           /phones               index        phones.index
GET           /phones/create        create       phones.create
POST          /phones               store        phones.store
GET           /phones/{phone}       show         phones.show
GET           /phones/{phone}/edit  edit         phones.edit
PUT/PATCH     /phones/{phone}       update       phones.update
DELETE        /phones/{phone}       destroy      phones.destroy
|--------------------------------------------------------------------------
*/

Route::get('/phones/{phone}/runningconfig', 'PhoneController@runningconfig');
Route::get('/phones/{phone}/networkinfo', 'PhoneController@networkinfo');
Route::get('/phones/{phone}/networkstats', 'PhoneController@networkstats');
Route::get('/phones/{phone}/calllogs', 'PhoneController@calllogs');
Route::get('/phones/{phone}/devicestats', 'PhoneController@devicestats');
Route::get('/phones/{phone}/lineinfo', 'PhoneController@lineinfo');

Route::post('/polyrestapi', 'VoipRestController@polyrestapi');
