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
    return redirect('/blog');
});

Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@showPost');

Route::get('admin', function (){
    return redirect('/admin/post');
});

Route::group(['namespace'=>'Admin','middleware'=>'auth'],function(){
    Route::any('admin/post','PostController@index');
//    Route::get('admin/tag','TagController');
//    Route::get('admin/upload','UploadController@index');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
