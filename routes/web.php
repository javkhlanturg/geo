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

Route::get('/', function () {
    $submenu = TCG\Voyager\Models\MenuItem::where('menu_id', 4)->get();
    $menus = TCG\Voyager\Models\MenuItem::where('menu_id', 3)->get();
    return view('/frontend/index', ['submenu'=>$submenu, 'menus'=>$menus]);
});

Auth::routes();

Route::get('/home', 'HomeController@index');
