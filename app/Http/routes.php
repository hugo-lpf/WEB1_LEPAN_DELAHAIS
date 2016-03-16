<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome', ['id' => 100]);
});



Route::group(['middleware' => ['web']], function () {



    Route::resource('/articles', 'PostController');

    Route::get('/contact', ['as' => 'page.contact', 'uses' => function() {
        return 'ok';
    }]);





});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/', function (){
        return view('welcome', ['id' => 100]);


    });

    Route::get('/home', 'HomeController@index');
});
