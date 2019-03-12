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

Route::get('/product','ProductController@viewProduct');

Route::post('/product', 'ProductController@store');

Route::get('/product/create', 'ProductController@createReview');

Route::get('/product/{id}', 'ProductController@viewProduct');

Route::get('/database-product','ProductController@viewDatabase');

//Review

Route::get('/review/{id}', 'ProductController@viewProduct');

//Panier

Route::get('/panier', 'PanierController@viewPanier');

//Home

Route::get('/home', 'HomeController@show');

Route::get('/', 'HomeController@show');

//Customer

Route::get('/customer', 'CustomerController@index');

//form

Route::get('/formReview', 'FormsController@create');
Route::post('/formReview', 'FormsController@store');
Route::get('/productList', 'ProductController@productList');
//Creer product
Route::get('/createProduct', 'ProductController@createProduct');
Route::post('/productList', 'ProductController@storeProduct');
//Modifier product
Route::get('/productEdit/{id}', 'ProductController@editProduct');
Route::post('/product/{id}/edit', 'ProductController@storeProduct');


//Destroy product
Route::post('/product/{id}/edit', 'ProductController@updateProduct');
Route::get('/product/{id}/delete', 'ProductController@destroyProduct');

//Function

Route::get('/layout', 'LayoutController@show');


Route::get('/contact', 'ContactController@show') ;


Route::get('/about_us', 'AboutUsController@show');


// Catalog
Route::get('/catalog', 'CatalogController@viewCatalog');

Route::get('/catalog', 'CatalogController@viewCatalog' );

// Contact
Route::get('/contact', 'ContacController@show' );


