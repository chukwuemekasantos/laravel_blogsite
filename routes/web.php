<?php


Route::get('/', 'PostsController@home')->name('home');

Route::get('/posts/createpost', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');

Route::get('/tasks', 'TaskController@index');

Route::get('/tasks/{task}', 'TaskController@show');



Route::get('/register', 'RegisterationController@create');

Route::get('/login', 'SessionController@create');

Route::post('/register', 'RegisterationController@store');

Route::get('/logout', 'SessionController@destroy');

Route::post('/login', 'SessionController@store');

