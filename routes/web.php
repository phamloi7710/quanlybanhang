<?php
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/login.html', 'Admin\AuthenticationController@getLogin')->name('getLoginAdmin');
Route::post('admin/login.html', 'Admin\AuthenticationController@postLogin')->name('postLoginAdmin');
Route::get('admin/logout','Admin\AuthenticationController@getLogout')->name('getLogoutAdmin');
Route::group(['prefix'=>'admin', 'middleware'=>'checkRoleAdmin'], function(){
	Route::get('uploads', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('uploads/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
	Route::get('', 'Admin\IndexController@getIndex')->name('getIndexAdmin');
	Route::get('image-management.html', 'Admin\IndexController@getFileManagement')->name('getFileManagement');
	Route::group(['prefix'=>'category'], function(){
		Route::get('list.html', 'Admin\ProductController@getListCate')->name('getListCateAdmin');
		Route::get('add-new.html', 'Admin\ProductController@getAddCate')->name('getAddCateAdmin');
		Route::post('add-new.html', 'Admin\ProductController@postAddCate')->name('postAddCateAdmin');
		Route::get('edit/{id}.html', 'Admin\ProductController@getEditCate')->name('getEditCateAdmin');
		Route::post('edit/{id}.html', 'Admin\ProductController@postEditCate')->name('postEditCateAdmin');
	});
	Route::group(['prefix'=>'products'], function(){
		Route::get('list', 'Admin\ProductController@getList')->name('getListProducts');
		Route::get('add-new.html', 'Admin\ProductController@getAdd')->name('getAddProduct');
		Route::post('add-new.html', 'Admin\ProductController@postAdd')->name('postAddProduct');
	});
});
