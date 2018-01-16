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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::group(['prefix' => 'post'], function() {
        Route::get('index', ['as' => 'admin.post.getIndex', 'uses' => 'PostController@getIndex']);
    });

    Route::group(['prefix' => 'comment'], function() {
        Route::get('index', ['as' => 'admin.comment.getIndex', 'uses' => 'CommentController@getIndex']);
    });

    Route::group(['prefix' => 'setting'], function() {
        Route::get('index', ['as' => 'admin.setting.getIndex', 'uses' => 'SettingController@getIndex']);
        Route::get('edit/{id}', ['as' => 'admin.setting.getEdit', 'uses' => 'SettingController@getEdit']);
        Route::post('edit/{id}', ['as' => 'admin.setting.postEdit', 'uses' => 'SettingController@postEdit']);
    });

    Route::group(['prefix' => 'account'], function () {
        Route::get('index', ['as' => 'admin.account.getIndex', 'uses' => 'AccountController@getIndex']);
        Route::get('add', ['as' => 'admin.account.getAdd', 'uses' => 'AccountController@getAdd']);
        Route::post('add', ['as' => 'admin.account.postAdd', 'uses' => 'AccountController@postAdd']);
        Route::get('edit/{id}', ['as' => 'admin.account.getEdit', 'uses' => 'AccountController@getEdit']);
        Route::post('edit/{id}', ['as' => 'admin.account.postEdit', 'uses' => 'AccountController@postEdit']);
        Route::get('delete/{id}', ['as' => 'admin.account.getDelete', 'uses' => 'AccountController@getDelete']);
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('/', ['as' => 'admin.user.index', 'uses' => 'UserController@index']);
        Route::get('create', ['as' => 'admin.user.create', 'uses' => 'UserController@create']);
        Route::post('store', ['as' => 'admin.user.store', 'uses' => 'UserController@store']);
        Route::get('edit/{id}', ['as' => 'admin.user.edit', 'uses' => 'UserController@edit']);
        Route::post('update/{id}', ['as' => 'admin.user.update', 'uses' => 'UserController@update']);
        Route::get('destroy/{id}', ['as' => 'admin.user.destroy', 'uses' => 'UserController@destroy']);
    });
});