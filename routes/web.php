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

Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('login/user',"UserController@loginWeb");
Route::get('/','ArticleController@index');
Route::get('/create',function (){
    return view('inc.create');
});
Route::post('/insert','ArticleController@create');
Route::get('/update/{id}','ArticleController@update');
Route::get('/read/{id}','ArticleController@read');
Route::post('/edit/{id}','ArticleController@edit');
Route::get('/delete/{id}','ArticleController@delete');
//Route::get('/upload',function()
//{
//    return view('layouts.upload');
//});
Route::post('/store','UserController@store');
Route::get('/file','FileController@showUploadForm')->name('upload.file');
Route::get('/show','FileController@index');
Route::post('/file','FileController@store');
