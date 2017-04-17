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
Route::group(['middleware' =>['web']],function(){

Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('/admin/login', [  
      'uses' 	   => 'AdminController@getLogin',
      'as' 	       => 'admin.login'
	])->name('login');

Route::post('/admin/login', [  
      'uses' 	   => 'AdminController@postLogin',
      'as' 		   => 'admin.login'
	]);
//this routes i want to protect
Route::group(['middleware' => 'auth'],function(){
	
Route::get('/admin/dashboard', [  
      'uses'	   => 'AdminController@getdashboard',
      'as' 		   => 'admin.dashboard'
	]);

Route::get('/admin/adminproducts',function()
{
	return view('admin.adminproducts');
});

});

Route::get('/admin/logout', [  
      'uses'	   => 'AdminController@getLogout',
      'as' 	 	   => 'admin.logout'
	]);

});

