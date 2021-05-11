<?php

use Illuminate\Support\Facades\Route;

/* HOME VIEW */
Route::view('/', 'home')->name('home');
/* END HOME VIEW */

/* ABOUT VIEW */
Route::view('/about', 'about')->name('about');
/* END ABOUT VIEW */

/* CONTACT VIEW */
Route::view('/contact', 'contact')->name('contact');
/* END CONTACT VIEW */

/* MESSAGE CONTROLLER */
Route::post('/contact', 'MessageController@store')->name('Messages');
/* END MESSAGE CONTROLLER */

/* PROJECT CONTROLLER */
Route::resource('/project', 'ProjectController')->names('project');
/* END PROJECT CONTROLLER */




