<?php



Route::get('/', 'BlogController@index');

Route::get('/post/new', array(
	'uses' 	=> 'BlogController@newPost',
	'as'  	=> 'newPost'
));

Route::post('/post/new', array(
	'uses' => 'BlogController@createPost',
	'as' => 'createPost'
));

Route::get('/post/{id}', array(
	'uses' => 'BlogController@viewPost',
	'as' => 'viewPost'
));

Route::post('/post/{id}/comment', array(
	'uses' => 'BlogController@createComment',
	'as' => 'createComment'
));

