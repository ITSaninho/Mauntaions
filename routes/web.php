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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/',['uses'=>'IndexController@index','as'=>'index']);
Route::post('/getdata',['uses'=>'IndexController@getData','as'=>'getdata']);
Route::post('/save/order',['uses'=>'IndexController@saveorder','as'=>'order']);
Route::post('/save/contact',['uses'=>'IndexController@savecontact','as'=>'contact']);
//Route::post('/signin',['uses'=>'Auth\RegisterController@create','as'=>'signin']);
Route::auth();



//Профіль користувача
Route::group(['prefix'=>'admin', 'middleware' => ['auth']],   function() {

	Route::get('/',['uses' => 'AdminController@index']);

		Route::post('/getadmindata',['uses'=>'AdminController@getAdminData','as'=>'getadmindata']);
		Route::post('/save/header',['uses'=>'AdminController@saveheader','as'=>'header']);
		Route::post('/save/about',['uses'=>'AdminController@saveabout','as'=>'about']);
		Route::post('/save/comment',['uses'=>'AdminController@savecomment','as'=>'comment']);
		Route::post('/save/gallery',['uses'=>'AdminController@savegallery','as'=>'gallery']);
		Route::post('/save/journal',['uses'=>'AdminController@savejournal','as'=>'journal']);
		Route::post('/save/travel',['uses'=>'AdminController@savetravel','as'=>'travel']);
		Route::post('/save/wanna',['uses'=>'AdminController@savewanna','as'=>'wanna']);
		Route::post('/save/work',['uses'=>'AdminController@savework','as'=>'work']);
		Route::post('/save/social',['uses'=>'AdminController@savesocial','as'=>'social']);
		Route::post('/save/company',['uses'=>'AdminController@savecompany','as'=>'company']);
		Route::post('/save/user',['uses'=>'AdminController@saveuser','as'=>'user']);

		Route::post('/upload_img',['uses'=>'AdminController@upload_img','as'=>'upload_img']);

		Route::post('/save/order',['uses'=>'IndexController@saveorder','as'=>'order']);
		Route::post('/save/contact',['uses'=>'IndexController@savecontact','as'=>'contact']);

		Route::post('/add/journal',['uses'=>'AdminController@addjournal','as'=>'addjournal']);
		Route::post('/add/work',['uses'=>'AdminController@addwork','as'=>'addwork']);
		Route::post('/add/travel',['uses'=>'AdminController@addtravel','as'=>'addtravel']);
		Route::post('/add/comment',['uses'=>'AdminController@addcomment','as'=>'addcomment']);

		Route::post('/delete',['uses'=>'AdminController@delete','as'=>'delete']);

		Route::get('/{pageNotFount}', ['as' => 'noroute', 'uses' => 'IndexController@noroute']);
});

Route::get('/{pageNotFount}', ['as' => 'noroute', 'uses' => 'IndexController@noroute']);