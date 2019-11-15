<?php

use Illuminate\Http\Request;

Route::get('ministery', 'MinisteryController@index');

Route::get('tag', 'TagController@index');
Route::get('tag/ministery/{id}', 'TagController@showByMinistery');
Route::post('tag', 'TagController@store');

Route::get('demand', 'DemandController@index');
Route::get('demand/ministery/{id}', 'DemandController@showByMinistery');
Route::post('demand', 'DemandController@store');

Route::get('region', 'RegionController@index');
