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
/*
Route::get('/', 'PageController@index');

Route::get('/index1', 'PageController@index1');

Route::get('/index','PageController@index');

Route::get('/mail', 'PageController@mail');

Route::get('/portfolio', 'PageController@portfolio');

Route::get('/short-codes', 'PageController@shortcodes');

Route::get('/single', 'PageController@single');




Route::get('/services', 'PageController@services');
*/


Route::get('/form', 'PageController@form');

Route::post('/form/getData', 'PageController@store');


Route::group(['middleware'=>['auth'] ],function()
{
Route::get('/withdraw', 'PageController@withdraw');

Route::get('/deposit', 'PageController@deposit');

Route::get('/history', 'PageController@history');

Route::get('/transfer', 'PageController@transfer');
});

Route::get('/', 'layoutController@dashboard');

Route::get('/dashboard', 'layoutController@dashboard');

Route::get('/products', 'layoutController@products');

Route::get('/payment', 'layoutController@payment');

Route::get('/orderPlaced', 'layoutController@orderPlaced');

Route::get('/orderHistory', 'layoutController@orderHistory');

Route::get('/checkout', 'layoutController@checkout');

Route::get('/signup', 'layoutController@signup');

Route::get('/userlogin', 'layoutController@userlogin');

Route::get('/reset', 'layoutController@reset');

Route::get('/mobiles', 'layoutController@mobiles');

Route::get('/myProfile', 'layoutController@myProfile');

Route::get('/resetpassword', 'layoutController@resetpassword');


Route::auth();

Route::get('/home', 'HomeController@index');
