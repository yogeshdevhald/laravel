<?php
Route::get('/','CurdController@index');
Route::any('save','CurdController@Add');
Route::any('data','CurdController@fetch');
Route::any('Edit/{id}','CurdController@Edit');
Route::any('update','CurdController@Update');

