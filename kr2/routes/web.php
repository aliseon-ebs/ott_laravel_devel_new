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

Auth::routes();

// common

// main header

Route::get('/cart', 'CommonController@cart')->name('cart');
Route::get('/download', 'CommonController@download')->name('download');
Route::get('/help', 'CommonController@help')->name('help');
Route::get('/product/view/{product_id}', 'CommonController@product_detail')->name('product_detail');
Route::get('/product/billing/view/{product_id}', 'CommonController@product_billing_detail')->name('product_billing_detail');
Route::get('/search-result/{keyword}', 'CommonController@search_result')->name('search_result');
Route::get('/trackyourorder', 'CommonController@trackyourorder')->name('trackyourorder');

// main header

// main footer

Route::get('/careers', 'CommonController@careers')->name('careers');
Route::get('/notice', 'CommonController@notice')->name('notice');
Route::get('/notice/view/{notice_id}', 'CommonController@notice_detail')->name('notice_detail');
Route::get('/customer-right', 'CommonController@customer_right')->name('customer_right');
Route::get('/terms-of-use', 'CommonController@terms_of_use')->name('terms_of_use');
Route::get('/privacy-policy', 'CommonController@privacy_policy')->name('privacy_policy');
Route::get('/adversting-policy', 'CommonController@adversting_policy')->name('adversting_policy');

// main footer

// common

// main header

Route::get('/', 'MainController@index')->name('main_index');
Route::get('/index2', 'MainController@index2')->name('main_index2');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/register', 'MainController@register')->name('register');
Route::post('/register_result', 'MainController@register_result')->name('register_result');
Route::get('/trackyourorder', 'MainController@trackyourorder')->name('trackyourorder');
Route::get('/help', 'MainController@help')->name('help');
Route::get('/download', 'MainController@download')->name('download');
Route::get('/search-result', 'MainController@search_result')->name('search_result');
Route::get('/category/list/{category_id}', 'MainController@category_list')->name('category_list');

// main header

//main footer

Route::get('/sell-with-us', 'MainController@sell_with_us')->name('sell_with_us');
Route::get('/notice', 'MainController@notice')->name('notice');
Route::get('/notice/view/{id}', 'MainController@notice_detail')->name('notice_detail');
Route::get('/customer-right', 'MainController@customer_right')->name('customer_right');
Route::get('/terms-of-use', 'MainController@terms_of_use')->name('terms_of_use');
Route::get('/privacy-policy', 'MainController@privacy_policy')->name('private-policy');
Route::get('/affilate-marketing', 'MainController@affilate_marketing')->name('affilate-marketing');
Route::get('/ad-policy', 'MainController@ad_policy')->name('ad_policy');

// main footer

//main body

Route::get('/product/view/{product_id}', 'MainController@product_detail')->name('product_detail');
Route::get('/product/billing/view/{product_id}', 'MainController@product_billing_detail')
->name('product_billing_detail');

//main body

//atrend

Route::prefix('atrend')->group(function () {

  Route::get('/', 'AtrendController@index')->name('atrend_index');
  Route::get('/view/{atrend_id}', 'AtrendController@atrend_detail')->name('atrend_detail');

});

//atrend

//o2o

Route::prefix('o2o')->group(function () {

  Route::get('/', 'O2oController@index')->name('o2o_index');

});

//o2o

//freshfood

Route::prefix('freshfood')->group(function () {

  Route::get('/', 'FreshFoodController@index')->name('freshfood_index');

});

//freshfood

//subscription

Route::prefix('subscription')->group(function () {

  Route::get('/', 'SubscriptionController@index')->name('subscription_index');

});

//subscription

//crossborder

Route::prefix('crossborder')->group(function () {

  Route::get('/', 'CrossBorderController@index')->name('crossborder_index');
  Route::get('/how-to-purchase', 'CrossBorderController@how_to_purchase')->name('how_to_purchase');

});

//crossborder

//flashdeal

Route::prefix('flashdeal')->group(function () {

  Route::get('/', 'FlashdealController@index')->name('flashdeal_index');
  Route::get('/product/view/{id}', 'FlashdealController@flashdeal_product_detail')->name('flashdeal_product_detail');

});

//flashdeal

//event&coupon

Route::prefix('event-coupon')->group(function () {

  Route::get('/', 'EventCouponController@index')->name('eventcoupon_index');
  Route::get('/event/list/{event_id}', 'EventCouponController@event_list')->name('event_list');
  Route::get('/event/detail/{event_id}', 'EventCouponController@event_detail')->name('event_detail');
  Route::get('/coupon/list/{event_id}', 'EventCouponController@coupon_list')->name('coupon_list');
  Route::get('/coupon/detail/{event_id}', 'EventCouponController@coupon_detail')->name('coupon_detail');

});

//event&coupon

//special exhibition

Route::prefix('exhibition')->group(function () {

  Route::get('/', 'ExhibitionController@index')->name('exhibition_index');
  Route::get('/view/{exhibition_id}', 'ExhibitionController@exhibition_detail')->name('exhibition_detail');

});

//special exhibition

// my

Route::prefix('my')->group(function () {

  //my header

  Route::get('/', 'MyController@index')->name('my_index');

  //my header

  //my footer
  
  //my footer

  //my body

  //voyage

  Route::prefix('voyage')->group(function () {

    Route::get('/', 'MyController@voyage')->name('my_voyage');
    Route::get('/view/{id}', 'MyController@voyage_detail')->name('voyage_detail');

  });

  //voyage

  //my body

});

// my

// ajax