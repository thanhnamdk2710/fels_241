<?php

Route::get('/courses', 'User\UserController@courses')->name('user.courses');
Route::get('/courses/{slug}', 'User\UserController@lessons')->name('user.lessons');
Route::get('/lessons/{slug}', 'User\UserController@lessonDetails')->name('user.lessonDetails');
Route::get('/words', 'User\UserController@words')->name('user.words');
Route::get('/words/{slug}', 'User\UserController@wordDetails')->name('user.wordDetails');
