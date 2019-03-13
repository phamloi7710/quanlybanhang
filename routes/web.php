<?php
Auth::routes();
Route::post('language',array(
    'Middleware' => 'LanguageSwitcher',
    'uses' => 'LanguageController@index',
));
Route::get('language/{locale}',array(
    'Middleware' => 'LanguageSwitcher',
    'uses' => 'LanguageController@locale',
))->name('setLanguage');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/login.html', 'Admin\AuthenticationController@getLogin')->name('getLoginAdmin');
Route::post('admin/login.html', 'Admin\AuthenticationController@postLogin')->name('postLoginAdmin');
Route::get('admin/logout','Admin\AuthenticationController@getLogout')->name('getLogoutAdmin');
Route::group(['prefix'=>'admin', 'middleware'=>'checkRoleAdmin'], function(){
	Route::get('uploads', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('uploads', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
    Route::get('image-management.html', 'Admin\IndexController@getFileManagement')->name('getFileManagement');
	Route::get('', 'Admin\IndexController@getIndex')->name('getIndexAdmin');
	
	Route::group(['prefix'=>'category'], function(){
		Route::get('list.html', 'Admin\ProductController@getListCate')->name('getListCateAdmin');
		Route::get('add-new.html', 'Admin\ProductController@getAddCate')->name('getAddCateAdmin');
		Route::post('add-new.html', 'Admin\ProductController@postAddCate')->name('postAddCateAdmin');
		Route::get('edit/{id}.html', 'Admin\ProductController@getEditCate')->name('getEditCateAdmin');
		Route::post('edit/{id}.html', 'Admin\ProductController@postEditCate')->name('postEditCateAdmin');
	});
	
	Route::group(['prefix'=>'language'], function(){
		Route::get('list', 'Admin\LanguageController@getList')->name('getListLanguages');
		Route::post('add-new.html', 'Admin\LanguageController@postAdd')->name('postAddLanguage');
		Route::post('edit/{id}.html', 'Admin\LanguageController@postEdit')->name('postEditLanguage');
	});
	Route::group(['prefix'=>'product'], function(){
		Route::get('list.html', 'Admin\ProductController@getList')->name('getListProductsAdmin');
		Route::get('add-new.html', 'Admin\ProductController@getAdd')->name('getAddProductAdmin');
		Route::post('add-new.html', 'Admin\ProductController@postAdd')->name('postAddProductAdmin');
		Route::get('edit/{id}.html', 'Admin\ProductController@getEdit')->name('getEditProductAdmin');
		Route::post('edit/{id}.html', 'Admin\ProductController@postEdit')->name('postEditProductAdmin');
	});
	Route::group(['prefix'=>'page'], function(){
		Route::get('introduce.html', 'Admin\AdminController@getIntroduce')->name('getIntroduceAdmin');
		Route::post('introduce.html', 'Admin\AdminController@postIntroduce')->name('postIntroduceAdmin');
	});
});






// Frontend
Route::get('/', 'Frontend\IndexController@getIndex')->name('getIndex');
Route::get('{cate_name}/{slug}.html', 'Frontend\ProductController@getDetail')->name('getDetailProduct');
Route::get('gioi-thieu.html', 'Frontend\FrontendController@getIntroduce')->name('getIntroduceFrontend');
Route::get('danh-muc/{url}.html', 'Frontend\FrontendController@getIntroduce')->name('getIntroduceFrontend');
