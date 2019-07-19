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



//Customer

Route::get('/customer', 'CustomerController@index');


Route::get('/customer/{id}/edit', 'CustomerController@edit');
Route::post('/customer/{id}/edit', 'CustomerController@update');

Route::get('/customer/{id}/delete', 'CustomerController@delete');

Route::get('/customer/create', 'CustomerController@create');
Route::post('/create', 'CustomerController@insert');

Route::get('/customer/{id}', 'CustomerController@show');


//Function

Route::get('/layout', 'LayoutController@show');


Route::get('/contact', 'ContactController@show');


Route::get('/about_us', 'AboutUsController@show');


// Catalog
Route::get('/catalog', 'CatalogController@viewCatalog');


Route::get('/water', 'CatalogController@viewWaterProduct');

Route::get('/food', 'CatalogController@viewFoodProduct');

Route::get('/heating', 'CatalogController@viewHeatingProduct');

Route::get('/electricity', 'CatalogController@viewElectricProduct');

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
