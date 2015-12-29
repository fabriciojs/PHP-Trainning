<?php


// Route::get('hello-world', 'HelloWorldController@hello');

// Route::get('echo/{qualquercoisa?}', [
// 	'as' => 'echoador',
// 	'uses' => 'HelloWorldController@echoar',
// ]);

Route::get('debug', function() {
	return route('echoador');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

	Route::get('user/{id}', function($id) {
		return "Admin user $id";
	});

	Route::delete('user/{id}', function($id) {
		return "Apaga usuário admin $id";
	});

});

Route::get('login', function() {
	return view('login')->with(['page_title' => 'Super Login!']);
});
