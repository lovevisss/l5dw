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

Route::get('/', 'CategoriesController@mainPage');

Route::get('/main', function(){

	return view('layouts.main');
});

Route::get('/users/{id}', function($id){
	var_dump("User with id of $id");
});

Route::get('info', ['as' => 'info', 'uses' => 'HomeController@info']);
Route::patch('info/{id}/edit', ['as' => 'update_info', 'uses' => 'HomeController@update_info']);


// Route::patch('ajax_add/{id}', ['as' => 'ajax_add', 'uses' => 'HomeController@ajax_add']);

Route::get('changepassword', ['as' => 'changepwd', 'uses' => 'HomeController@changepwd']);
Route::patch('info/{id}/password', ['as' => 'update_pwd', 'uses' => 'HomeController@update_pwd']);

// Route::get('/addtoCart/{id}', ['as' => 'add_to_cart', 'uses' => 'ShoppingCartController@add_to_cart']);
Route::get('remove_item/{id}',['as' => 'removeitem', 'uses' => 'ShoppingCartController@removeItem']);
Route::get('/cart', ['as' => 'cart', 'uses' => 'ShoppingCartController@showCart']);
Route::post('cart_calc', ['as' => 'cart_calc', 'uses' => 'ShoppingCartController@cart_calc']);




Route::get('/logout', 'HomeController@logout');

Route::get('/home', 'CategoriesController@mainPage');
Route::get('/recommend', 'HomeController@recommend');
Route::get('/categories/{id}', 'CategoriesController@getCategory');
Route::post('admin/categories/index', 'CategoriesController@postCreate');
Route::get('admin/categories/index', ['as' => 'admin-category' , 'uses' => 'CategoriesController@index']);
Route::post('admin/categories/destroy', 'CategoriesController@postDestroy');

Route::post('admin/products/create', 'ProductsController@postCreate');
Route::get('admin/products/index', ['as' => 'admin-product', 'uses' =>'ProductsController@index']);
Route::post('admin/products/destroy', 'ProductsController@postDestroy');
Route::post('admin/products/toggle-availability', 'ProductsController@postToggleAvailability');

Route::put('admin/products/update', ['uses' => 'ProductsController@updateProduct', 'as' => 'product.update']);
Route::get('admin/products/edit/{id}', ['uses' => 'ProductsController@edit', 'as' => 'product.edit']);

Route::get('product/{id}', ['as' => 'product', 'uses' => 'ProductsController@getProduct']);
Route::get('search/{keyword}', 'CategoriesController@searchProduct');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('shoppingcart/{id}/{num}', 'ShoppingCartController@add_to_cart')->name('add_cart');
Route::delete('admin/shoppingcartitem/destroy', 'HomeController@delete_shoppingcart_item');
Route::get('viewcart', 'HomeController@getShoppingcart')->name('view_cart');
Route::post('admin/shoppingcartitem/minus', 'HomeController@minus_shoppingcart_item');
Route::post('admin/shoppingcartitem/add', 'HomeController@add_shoppingcart_item');


Route::get('vieworder', 'OrderController@getOrder')->name('view_order');
Route::get('one/{id}', 'OrderController@getOne')->name('one');
Route::get('pay/{id}', 'OrderController@pay')->name('pay');
Route::get('refund/{id}', 'OrderController@refund')->name('refund');
Route::get('deliver/{id}', 'OrderController@deliver')->name('deliver');

Route::get('confirm_goods/{id}', 'OrderController@confirm_goods')->name('confirm_goods');

Route::get('manage', ['as' => 'manage', 'uses' => 'HomeController@manage']);
Route::get('promote', ['as' => 'promote', 'uses' => 'HomeController@promote']);
Route::get('admin/users', ['as' => 'admin-user', 'uses' => 'HomeController@getUser']);
Route::get('admin/orders', ['as' => 'admin-order', 'uses' => 'HomeController@adminOrder']);

Route::get('admin/login', ['as' => 'admin.login', 'uses' => 'Auth\LoginController@adminLogin']);

Route::post('admin/login', ['as' => 'admin.login.post', 'uses' => 'Auth\LoginController@adminLogin_post']);
