<?php

use Illuminate\Support\Facades\Route;

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
// front route
Route::get('/', function () {
    return view('front.index');
});
Route::get('/privacy', function () {
    return view('front.privacy');
});

Route::get('/orders', function () {
    return view('front.orders');
})->name('order.front');

Route::post('/order', 'OrderController@store')->name('order.store');

Route::get('/thankyou_', function() {
    return view('front.thankyou1');
})->name('thankyou1');


// end front route






// dash route
Route::group(['middleware' => ['auth']], function () {

Route::get('/admin', function () {
    return view('dashbord.layout.sidebar');
});

Route::get('/order/Confirme', 'OrderController@Confirme')->name('order.confirme');
Route::get('/order/livre', 'OrderController@livre')->name('order.livre');
Route::get('/order', 'OrderController@index')->name('order.index');
Route::put('/order/{order}', 'OrderController@update')->name('order.update');

Route::delete('/order/{order}', 'OrderController@destroy')->name('order.destroy');

});

// end dash route



Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
