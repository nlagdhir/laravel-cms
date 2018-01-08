<?php
Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/','PagesController@index');
    Route::get('/about','PagesController@about');
    Route::get('/blog','PagesController@blog');
    Route::get('/blog/{id}','PagesController@single_blog');
    Route::get('/contact','PagesController@contact');
    Route::get('/videos','PagesController@showVideos');
    Route::get('{id}','PagesController@page_show');


    Route::group(['middleware'=>['auth','admin'],'prefix'=>'admin'],function(){
		Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
        Route::get('/filemanager','AdminController@filemanager');
        Route::get('/setting/homepage','AdminController@settings_home');
        Route::post('/save_settings','AdminController@save_settings');
        Route::get('/setting/global','AdminController@setting_global');
        Route::get('/setting/experts','AdminController@experts_settings');
        Route::post('/setting/experts','AdminController@experts_save_settings');
        Route::post('/save_global_settings','AdminController@save_global_settings');
        Route::resource('teams', 'TeamsController');
		Route::resource('sliders', 'SlidersController');
		Route::resource('posts', 'PostsController');
        Route::resource('pages', 'AdminPagesController');
        Route::resource('settings', 'SettingsController');
        Route::resource('portfolio', 'PortfoliosController');
        Route::resource('videos', 'VideosController');
    });
});