<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Home',function(){
	return view('Login');
});
Route::resource('/Check','Hello_controller@edit');

Route::resource('/User','Hello_controller');

Route::resource('/Create','Hello_controller@create');
Route::resource('/Store','Hello_controller@store');
Route::resource('/Read','Hello_controller');
/*Route::get('/Read',function(){
	return view('Read');
});
*/
Route::get('/Update',function(){
	return view('Update');
});
Route::resource('/Edit','Hello_controller@update');


Route::get('/Delete',function(){
	return view('Delete');
});
Route::resource('/Drop','Hello_controller@destroy');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
?>