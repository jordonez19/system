<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');

Route::post('/contact', 'MessageController@store')->name('Messages');

Route::get('/project', 'ProjectController@index')->name('project.index');
Route::get('/project/create', 'ProjectController@create')->name('project.create'); //crear siempre va primero q show
Route::get('/project/{project}/edit', 'ProjectController@edit')->name('project.edit');

Route::patch('/project/{project}', 'ProjectController@update')->name('project.update');

Route::post('/project', 'ProjectController@store')->name('project.store');
Route::get('/project/{project}', 'ProjectController@show')->name('project.show');










/*
Route::resource('/portafolio', 'PortafolioController')->only('index', 'show'); para mostrar solo esos dos metodos;
Route::resource('/portafolio', 'PortafolioController')->except('index', 'show'); para no mostrar esos 2 metodos;
Route::apiResource('/portafolio', 'PortafolioController')->name('portafolio');

 */

//name  solo sirve para hacer routes de links = href route ...
// Route::view('/', 'prueba'); para visstas directas con poco uso de metodos; politicas de privacidad articulos etc;




