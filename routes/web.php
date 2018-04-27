<?php

Route::get('/courses', 'User\UserController@courses')->name('user.courses');
Route::get('/courses/{slug}', 'User\UserController@lessons')->name('user.lessons');
