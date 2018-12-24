<?php
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/login.html', 'Admin\AuthenticationController@getLogin')->name('getLoginAdmin');
Route::post('admin/login.html', 'Admin\AuthenticationController@postLogin')->name('postLoginAdmin');
Route::get('admin/logout','Admin\AuthenticationController@getLogout')->name('logout');
Route::group(['prefix'=>'admin', 'middleware'=>'checkRoleAdmin'], function(){
	Route::get('uploads', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('uploads/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
	Route::get('', 'Admin\IndexController@getIndex')->name('getIndexAdmin');
	Route::get('image-management.html', 'Admin\IndexController@getFileManagement')->name('getFileManagement');
	Route::group(['prefix'=>'category'], function(){
		Route::get('list', 'Admin\ProductController@getListCate');
		Route::post('list', 'Admin\ProductController@getListCate');
	});
});
