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

Route::get('/product/create', 'ProductController@createProduct');

Route::get('/product/{id}', 'ProductController@viewProduct');

Route::get('/database-product', 'ProductController@viewDatabase');

//Review

Route::get('/review/{id}', 'ProductController@viewProduct');

//Panier
Route::get('/cart', 'PanierController@viewPanier');
Route::post('/cart', 'PanierController@viewPanier');
Route::get('/cartRemove', 'PanierController@remove');
Route::get('/removeCart', 'PanierController@allRemove');
Route::post('/commande', 'PanierController@addOrder');
Route::get('/commandeValide', 'PanierController@orderValid');


//Home

Route::get('/home', 'BrandController@show');
Route::get('/', 'BrandController@show');

//Brands

    Route::get('/brand/brandlist', 'BrandController@brandList');
    Route::get('/brand/create', 'BrandController@create');
    Route::get('/brand/edit/{id}', 'BrandController@edit');
    Route::post('/brand/edit/{id}', 'BrandController@update');
    Route::get('/brand/delete/{id}', 'BrandController@destroy');
    Route::post('/home', 'BrandController@store');


//Customer

Route::get('/customer', 'CustomerController@index');

//form


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

Route::get('/customerForm', 'CustomerController@createCustomer');

Route::get('/customerForm/{id}', 'CustomerController@modifyCustomer');

Route::post('/accountCreated', 'CustomerController@storeCustomer');


Route::get('/customer/deleteCustomerForm', 'CustomerController@show');
Route::get('/customer/deleteCustomerForm/{id}', 'CustomerController@modifyCustomer');
Route::post('/customerForm', 'CustomerController@createCustomer');

Route::get('/customer/{id}/deleteCustomerForm', 'CustomerController@deleteCustomer');
Route::post('/customer/{id}/deleteCustomerForm', 'CustomerController@deleteCustomer');

Route::get('/customer/{id}/accountCreated', 'CustomerController@edit');

Route::post('/customer/{id}/accountCreated', 'CustomerController@update');


//Function

Route::get('/layout', 'LayoutController@show');


Route::get('/contact', 'ContactController@show');


Route::get('/about_us', 'AboutUsController@show');


// Catalog
Route::get('/catalog', 'CatalogController@viewCatalog');


// Contact
Route::get('/contact', 'ContactController@show' );
Route::post('/contact', 'ContactController@store');

// Newsletter
Route::get('/newsletter/subscribingnewsletter', 'SubscribingNewsletterController@show');
Route::post('/merci', 'SubscribingNewsletterController@store' );

//Reviews

Route::post('/review', 'ReviewController@createReview' );
Route::post('/userReview', 'ReviewController@storeReview' );



Auth::routes();

Route::get('/account', 'HomeController@index')->name('home');

Route::get('/cgdv', function(){return View::make('cgdv');});
