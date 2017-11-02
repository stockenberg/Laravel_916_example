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

	$news = \Illuminate\Support\Facades\DB::table('news')->paginate(4);

	return view('pages.home', ['news' => $news]);

})->name('homepage');


Route::get('/news/delete/{id}', function ($id) {

	$news = \App\News::find($id);
	$news->delete();

	return redirect()->back();

})->name('news.delete');

/*Route::group(['prefix' => "test"], function () {
	Route::get('/home', 'HomeController@index')->name('home');
});*/

Route::group(['middleware' => 'auth:admin'], function () {
	Route::get('/test', 'NewsController@index');
});




Route::prefix('products')->group(function () {

	Route::get('/', [
		'uses' => "ProductsController@index",
		'as'   => "products",
	]);

	Route::group(['middleware' => ['auth', 'auth:admin']], function () {

		Route::get('/delete/{id}', [
			'uses' => "ProductsController@destroy",
			'as'   => "products.delete",
		]);

		Route::get('/create', [
			'uses' => 'ProductsController@create',
			'as'   => 'products.create',
		]);

		Route::get('/edit/{id}', [
			'uses' => 'ProductsController@edit',
			'as'   => 'products.edit',
		]);

		Route::post('/update/{id}', [
			'uses' => 'ProductsController@update',
			'as'   => 'products.update',
		]);

		Route::post('/store', [
			'uses' => 'ProductsController@store',
			'as'   => 'products.store',
		]);

	});


});

Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\LoginController@login')->name('admin.post.login');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
