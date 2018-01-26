<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'HomeController@index');

Route::get('/training', function() {
	
	$lessons = DB::table('lessons')->get();

	return view('training.index', compact('lessons'));
});

Route::get('/training/{lesson}', function($id ){

	$lesson = DB::table('lessons')->find($id);

	return view('training.show', compact('lesson'));
});