<?php

use Illuminate\Support\Facades\Route;

Route::get('/','HomeController@index')->name('dashboard');

Route::get('/author','AuthorController@index')->name('auhtor.index');
Route::get('/author/create','AuthorController@create')->name('auhtor.create');
Route::post('/author/store','AuthorController@store')->name('auhtor.store');
Route::get('/author/{author}/edit','AuthorController@edit')->name('auhtor.edit');
Route::put('/author/{author}','AuthorController@update')->name('auhtor.update');
Route::delete('/author/{author}','AuthorController@destroy')->name('auhtor.destroy');
Route::get('/author/data','DataController@authors')->name('auhtor.data');

