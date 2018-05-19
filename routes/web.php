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
	$cartItems = Cart::content();
	$categories = App\Category::all();
	$products = App\Product::paginate(8);
    return view('welcome',compact('products','categories','cartItems'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin','middleware' =>['admin','auth']], function(){
Route::resource('/','AdminController');
Route::resource('/product','ProductController');
Route::resource('/category','CategoryController');
Route::resource('/combo','ComboController');
Route::get('/allOrders','OrdersController@allOrders')->name('allOrders');
Route::get('/pendingOrders','OrdersController@pendingOrders')->name('pendingOrders');
Route::get('/deliveredOrders','OrdersController@deliveredOrders')->name('deliveredOrders');

});
Route::get('/products','ProductController@allproducts')->name('allproducts');
Route::get('/combos','ComboController@allcombos')->name('allcombos');
Route::get('/category/{id}','CategoryController@showcategories')->name('showcategories');

Route::group(['middleware' =>['auth']], function(){

Route::get('/addToCart/{id}','CartController@addToCart')->name('addToCart');
Route::get('/cart','CartController@cartIndex')->name('cartIndex');
Route::get('/uaddToCart/{id}','CartController@uaddToCart')->name('uaddToCart');
Route::match(['put','patch'],'/cart/{cart}','CartController@updateCart')->name('updateCart');
Route::delete('/cart{id}', 'CartController@deleteItems')->name('deleteItems');

Route::get('/payment-method','PaymentController@paymentMethod')->name('paymentMethod');

Route::get('/banktransfer','PaymentController@bankTransfer')->name('bankTransfer');

Route::post('/bankTransferSubmitOrder','PaymentController@bankTransferSubmitOrder')->name('bankTransferSubmitOrder');

Route::get('/paymentcard','PaymentController@paymentcard')->name('paymentcard');

Route::post('/paymentcardSubmitOrder','PaymentController@paymentcardSubmitOrder')->name('paymentcardSubmitOrder');

Route::get('/thanks','PaymentController@thanks')->name('thanks');
});

Route::post('/statusOrder/{id}','OrdersController@statusOrder')->name('statusOrder');


Route::group(['middleware' =>['auth']], function(){
Route::get('/users','UsersController@index')->name('users');
Route::get('/users/createproduct','UproductController@create')->name('createproduct');
Route::post('/users/postproduct','UproductController@store')->name('postproduct');
Route::get('/users/myproduct','UproductController@index')->name('usersmyproduct');
Route::get('/users/proedit/{id}/edit','UproductController@edit')->name('edit');
Route::put('/users/proupdate/{id}','UproductController@update')->name('proupdate');
Route::delete('/users/prodestroy/{id}','UproductController@destroy')->name('prodestroy');


Route::get('/users/createcomboproduct','UcomboController@create')->name('createcomboproduct');
Route::post('/users/postcomboproduct','UcomboController@store')->name('postcomboproduct');
Route::get('/users/mycomboproduct','UcomboController@index')->name('mycomboproduct');
Route::get('/users/comboedit/{id}/edit','UcomboController@edit')->name('comboedit');
Route::put('/users/comboupdate/{id}','UcomboController@update')->name('comboupdate');
Route::delete('/users/combodestroy/{id}','UcomboController@destroy')->name('combodestroy');


Route::get('/uallOrders','OrdersController@uallOrders')->name('uallOrders');
Route::get('/udeliveredOrders','OrdersController@udeliveredOrders')->name('udeliveredOrders');

});	

Route::get('/proinfo/{id}','ProductController@proinfo')->name('proinfo');
Route::post('/search','ProductController@search')->name('search');
Route::post('/category/search','CategoryController@catsearch')->name('search');
Route::post('/proinfo/search','ProductController@search')->name('search');
Route::get('/cominfo/{id}','ComboController@cominfo')->name('cominfo');
