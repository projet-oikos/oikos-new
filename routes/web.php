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

//home
Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');


//product
Route::get('/product', 'ProductController@index');
Route::post('/product', 'ProductController@store');
Route::get('/product/create', 'ProductController@create');
Route::get('/product', 'ReviewController@viewReview');
Route::get('/product/{id}', 'ProductController@viewProduct');



//review
Route::get('/formReview', 'FormsController@create');
Route::post('/formReview', 'FormsController@display');


//catalog
Route::get('/catalog', 'CatalogController@viewCatalog');


//cart
Route::get('/panier', 'PanierController@viewPanier');


//header
Route::get('/header', function () {
    return view('header_oikos');
});


//footer
Route::get('/footer', function () {
    return view('footer_oikos');
});


//layout
Route::get('/layout', function () {
    return view('layout');
});


//contact
Route::get('/contact', function () {
    return view('contact');
});


//about_us
Route::get('/about_us', function () {
    return view('about_us');
});


//customer
Route::get('/customer', 'CustomerController@index');


//database-product
Route::get('/database-product', 'ProductController@viewDatabase');




