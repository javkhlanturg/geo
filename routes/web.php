<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/','HomeController@index');
Route::post('/comment','CommentController@addComment')->name('addComment');
Route::get('/e-news','EnewsController@newslist')->name('newslist');
Route::get('/login','LoginController@index')->name('login');
Route::post('/login','LoginController@login');
Route::get('/user/register','RegisterController@index');
Route::post('/user/register','RegisterController@register')->name('addRegister');
Route::post('/user/news/order','DashboardController@order')->name('orderNews')->middleware('auth');
Route::post('/user/news/order/delete','DashboardController@deleteOrder')->name('deleteOrder')->middleware('auth');
Route::get('/user/news/list','DashboardController@allnews')->name('userAllNews')->middleware('auth');
Route::get('/user/news/m/list','DashboardController@myNews')->name('myNews')->middleware('auth');
Route::get('/user/logout','LoginController@logout');
Route::get('/user/dashboard','DashboardController@index')->name('userDashboard')->middleware('auth');
Route::get('/{slug}','PostController@postList')->name('postList');
Route::get('/{slug}/{postid}','PostController@post')->name('viewPost');
