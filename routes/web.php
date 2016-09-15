<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/push',function(){
	event(new \App\Events\TestEvent('hi ash'));
});
Route::get('/index',function(){
	return view('index');
});
