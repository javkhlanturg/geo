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
Route::get('/jobs','ZarController@index')->name('zar');
Route::get('/jobs/add','ZarController@jobAdd')->name('jobAdd');
Route::post('/zar/add','ZarController@zarAdd')->name('zarAdd');
Route::get('/jobs/show','ZarController@zarShow')->name('zarShow');
Route::get('/business-news','ZarController@buslist');
Route::get('/busA','ZarController@busA');
Route::post('/bus/add','ZarController@busAdd')->name('busAdd');
Route::get('/bus/show','ZarController@busShow')->name('busShow');
Route::get('/login','LoginController@index')->name('login');
Route::post('/login','LoginController@login');
Route::get('/user/register','RegisterController@index');
Route::post('/user/register','RegisterController@register')->name('addRegister');
Route::post('/user/news/order','DashboardController@order')->name('orderNews')->middleware('auth');
Route::post('/user/news/order/delete','DashboardController@deleteOrder')->name('deleteOrder')->middleware('auth');
Route::get('/user/news/list','DashboardController@allnews')->name('userAllNews')->middleware('auth');
Route::get('/user/news/view/{newsid}','DashboardController@readNews')->name('readNews')->middleware('auth');
Route::get('/user/news/m/list','DashboardController@myNews')->name('myNews')->middleware('auth');
Route::get('/user/logout','LoginController@logout');
Route::get('/user/dashboard','DashboardController@index')->name('userDashboard')->middleware('auth');
Route::post('/user/change/pass','LoginController@sendChangePassMail')->name('sendChangePassMail');
Route::post('/user/save/pass','LoginController@savePass')->name('savePass');
Route::get('/user/change/pass/{token}','LoginController@changePassView')->name('changePassView');
Route::post('/mvactions','PostController@action')->name('mvAction');
Route::get('/search','PostController@search')->name('search');
Route::get('/page/{slug}','PostController@viewPage')->name('viewPage');
Route::get('/{slug}','PostController@postList')->name('postList');
Route::get('/{slug}/{postid}','PostController@post')->name('viewPost');
