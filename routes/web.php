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
});

Route::get('/hello',function(){
    return('Hello World!');
});

Route::get('/about',function(){
    return view('pages.about');
});

Route::get('/users/{name}', function($id,$name){
    return ('This is user '.$name.' '. 'with id '.$id);
});*/

Route::get ('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

Route::resource('/posts','PostsController');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
