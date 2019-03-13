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

//Product

Route::get('/product', 'ProductController@viewProduct');

Route::post('/product', 'ProductController@store');

Route::get('/product/create', 'ProductController@createReview');

Route::get('/product/{id}', 'ProductController@viewProduct');

Route::get('/database-product', 'ProductController@viewDatabase');

//Review

Route::get('/review/{id}', 'ProductController@viewProduct');

//Panier

Route::get('/panier/{id}', 'PanierController@viewPanier');


//Home

Route::get('/home', 'HomeController@show');

Route::get('/', 'HomeController@show');



Route::get('/brand/brandlist', 'HomeController@brandList');


Route::get('/brand/create', 'HomeController@create');
Route::post('/home', 'HomeController@store');
Route::get('/brand/{id}/edit', 'HomeController@edit');
Route::post('/brand/{id}/edit', 'HomeController@update');
Route::get('/brand/{id}/delete', 'HomeController@destroy');



//Customer

Route::get('/customer', 'CustomerController@index');

//form


Route::post('/product/{id}', 'ReviewController@store');

Route::get('/formProduct', 'ProductController@createProduct');

Route::post('/formProduct', 'ProductController@storeProduct');

Route::get('/formProduct/{id}/edit', 'ProductController@editProduct');

Route::post('/formProduct/{id}/update', 'ProductController@editProduct');

Route::get('/customerForm', 'CustomerController@createCustomer');

Route::post('/accountCreated', 'CustomerController@storeCustomer');

Route::get('/customer/{id}', 'CustomerController@view');

//Function

Route::get('/layout', 'LayoutController@show');


Route::get('/contact', 'ContactController@show');


Route::get('/about_us', 'AboutUsController@show');


// Catalog
Route::get('/catalog', 'CatalogController@viewCatalog');

Route::get('/catalog', 'CatalogController@viewCatalog');

// Contact
Route::get('/contact', 'ContactController@show' );
Route::post('/contact', 'ContactController@store');

// Newsletter
Route::get('/newsletter/subscribingnewsletter', 'SubscribingNewsletterController@show');
Route::post('/merci', 'SubscribingNewsletterController@store' );



