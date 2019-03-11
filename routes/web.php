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
Route::get('/','FrontEndController@index')->name('index');
Route::get('/post/{slug}','FrontEndController@singlePost')->name('post.single');
Route::get('/category/{id}','FrontEndController@category')->name('category.single');

Route::group(['prefix'=>'admin', 'middleware'=>'auth'],function (){

    Route::get('/home', 'HomeController@index')->name('home');

    Route::resource('/post','PostsController');

    Route::resource('/category','CategoriesController');

    Route::get('/posts/trashed',[
        'uses'=>'PostsController@trashed', 'as'=>'post.trashed'
    ]);

    Route::get('/posts/kill/{id}',[
        'uses'=>'PostsController@kill', 'as'=>'post.kill'
    ]);

    Route::get('/posts/restore/{id}',[
        'uses'=>'PostsController@restore', 'as'=>'post.restore'
    ]);
    Route::get('/user/admin/{id}',[
        'uses'=>'UsersController@admin',
        'as'=>'user.admin',
    ])->middleware('admin');

    Route::get('/user/not-admin/{id}',[
        'uses'=>'UsersController@notAdmin',
        'as'=>'user.not.admin'
    ]);

    Route::resource('/user','UsersController');

    Route::resource('/tags','TagsController');

    Route::resource('/profile','ProfilesController');

    Route::get('/settings','SettingsController@index')->name('settings');
    Route::post('/settings/update','SettingsController@update')->name('settings.update');

});

Auth::routes();
