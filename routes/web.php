<?php

use Illuminate\Support\Facades\Route;

/* HOME VIEW */

Route::view('/', 'home')->name('home');

/* ABOUT VIEW */

Route::view('/about', 'about')->name('about');

/* CONTACT VIEW */

Route::view('/contact', 'contact')->name('contact');

/* MESSAGE CONTROLLER */

Route::post('/contact', 'MessageController@store')->name('Messages');

/* PROJECT CONTROLLER */

Route::resource('/project', 'ProjectController')->names('project');


//Route::view('/language', 'projects.index')->name('language');


