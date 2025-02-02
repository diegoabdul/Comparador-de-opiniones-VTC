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




Route::get('contacto.php', function () {
    	return view('pages.contacto');
});

Route::get('nosotros.php', function () {
    	return view('pages.nosotros');
});

Route::get('Login/login.php', function () {
    	return view('auth.login');
});

Route::get('index2.php', function () {
    	return view('pages.index2');
});

Route::get('logout.php', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('/', function () {
	if(Auth::guest()){
    	return view('welcome');
	}else{
		return redirect('/home');
	}
});


Auth::routes();
Route::get('/home', function(){
	return view('pages.index2');
});


