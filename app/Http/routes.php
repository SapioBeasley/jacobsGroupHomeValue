<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
	'as' => 'step1',
	'uses' => 'StepsController@step1'
]);

Route::get('/step-2', [
	'as' => 'step2',
	'uses' => 'StepsController@step2'
]);

Route::post('/contact', [
	'as' => 'contact.post',
	'uses' => 'StepsController@contactPost'
]);


Route::get('test', function () {
	Bugsnag::notifyError('ErrorType', 'Test Error');
});
