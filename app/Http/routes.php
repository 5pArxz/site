<?php

Route::get('/', 'PostsController@index');
Route::get('/posts/{slug}', 'PostsController@show');
