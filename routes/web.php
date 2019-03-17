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
	Route::group(['prefix'=>'contact'], function(){
		Route::get('list.html', 'Admin\ContactController@getContact')->name('getContactAdmin');
		Route::post('list/{id}.html', 'Admin\ContactController@postContact')->name('postContactAdmin');
		Route::get('delete/{id}.html', 'Admin\ContactController@deleteContact')->name('deleteContact');
	});
	Route::group(['prefix' => 'settings'], function () {
		Route::get('website-infomation.html', 'Admin\SettingController@getWebInfo')->name('getWebInfo');
        Route::post('website-infomation.html', 'Admin\SettingController@postWebInfo')->name('postWebInfo');
    	Route::get('meta-seo.html', 'Admin\SettingController@getMetaSEO')->name('getMetaSEO');
        Route::post('meta-seo.html', 'Admin\SettingController@postMetaSEO')->name('postMetaSEO');
        Route::get('email-config.html', 'Admin\SettingController@getEmailConfig')->name('getEmailConfig');
        Route::post('email-config.html', 'Admin\SettingController@postEmailConfig')->name('postEmailConfig');
    });

    Route::group(['prefix'=>'user'], function(){
		Route::get('list.html', 'Admin\AccountController@getList')->name('getListUsersAdmin');
		Route::get('add-new.html', 'Admin\AccountController@getAdd')->name('getAddUserAdmin');
		Route::post('add-new.html', 'Admin\AccountController@postAdd')->name('postAddUserAdmin');
		Route::get('edit/{id}/{slug}.html', 'Admin\AccountController@getEdit')->name('getEditUserAdmin');
		Route::post('edit/{id}/{slug}.html', 'Admin\AccountController@postEdit')->name('postEditUserAdmin');
		Route::get('delete/{id}.html', 'Admin\AccountController@getDelete')->name('getDeleteUserAdmin');
		Route::get('change-password/{id}/{slug}.html', 'Admin\AccountController@getChangePassword')->name('getChangePasswordUserAdmin');
		Route::post('change-password/{id}/{slug}.html', 'Admin\AccountController@postChangePassword')->name('postChangePasswordUserAdmin');
	});
	Route::group(['prefix'=>'profile'], function (){
		Route::get('{username}', 'Admin\AccountController@getProfile')->name('getProfileAdmin');
	});
	Route::group(['prefix'=>'news'], function(){
		Route::group(['prefix'=>'news-category'], function(){
			Route::get('list.html', 'Admin\NewsController@getListCategories')->name('getListNewsCategoriesAdmin');
			Route::get('add.html', 'Admin\NewsController@getAddCategory')->name('getAddNewsCategoryAdmin');
			Route::post('add.html', 'Admin\NewsController@postAddCategory')->name('postAddNewsCategoryAdmin');
			Route::get('edit/{id}', 'Admin\NewsController@getEditCategory')->name('getEditNewsCategoryAdmin');
			Route::post('edit/{id}', 'Admin\NewsController@postEditCategory')->name('postEditNewsCategoryAdmin');
			Route::get('delete/{id}', 'Admin\NewsController@getDeleteCategory')->name('getDeleteNewsCategoryAdmin');
		});
	});

});
// Frontend
Route::get('/', 'Frontend\IndexController@getIndex')->name('getIndex');
Route::get('{cate_name}/{slug}.html', 'Frontend\ProductController@getDetail')->name('getDetailProduct');
Route::get('gioi-thieu.html', 'Frontend\FrontendController@getIntroduce')->name('getIntroduceFrontend');
Route::get('danh-muc/{url}', 'Frontend\FrontendController@getShowProductCate')->name('getProductCateFrontend');
Route::get('lien-he.html', 'Frontend\ContactController@getContact')->name('getContactFrontend');
Route::post('lien-he.html', 'Frontend\ContactController@postContact')->name('postContactFrontend');





















