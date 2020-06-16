<?php

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'MahasiswaController@index');

// students
Route::get('/students', 'StudentsController@index');
Route::get('/students/create', 'StudentsController@create');
Route::get('/students/{student}', 'StudentsController@show');
Route::post('/students', 'StudentsController@store');
Route::delete('/students/{student}', 'StudentsController@destroy');
