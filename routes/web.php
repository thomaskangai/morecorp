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
Route::get('/', 'ProductsController@visitorView');
Route::middleware(['auth'])->group(function(){
	Route::get('/product', function(){
	return view('products.create');
   });

	Route::post('/product/create', 'ProductsController@create')->name('createProduct');

	Route::get('/product/edit/{id}','ProductsController@displayEditView');
    Route::patch('/update/{id}', 'ProductsController@edit');
    Route::get('/products', 'ProductsController@getProducts');
    Route::delete('/product/{id}/delete', 'ProductsController@delete')->name('deleteProduct');

});

Route::get('/products/index', 'ProductsController@visitorView');
Route::get('/product/{id}/view', 'ProductsController@view');
Route::get('/bid/create', function(){
	return view('bids.create');
});
Route::post('/bid/store', 'BidsController@createBid')->name('createBid');
ROute::get('users/logout', function(){
	Auth::logout();
	return redirect('/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
