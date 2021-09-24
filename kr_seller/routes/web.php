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

Route::get('/', 'MainController@index')->name('index');
Route::get('/sales-training', 'SalesTraningController@sales_traning_index')->name('sales_traning');
Route::get('/sales-training/view/{id}', 'SalesTraningController@sales_traning_detail')->name('sales_traning_detail');
Route::get('/news-in-aliseon', 'NewsInAliseonController@news_in_aliseon_index')->name('news_in_aliseon');
Route::get('/news-in-aliseon/view/{id}', 'NewsInAliseonController@news_in_aliseon_detail')->name('news_in_aliseon_detail');
Route::get('/success-story', 'SuccessStoryController@success_story_index')->name('success_story');
Route::get('/success-story/view/{id}', 'SuccessStoryController@success_story_detail')->name('success_story_detail');
Route::get('/become-a-seller', 'BecomeaController@become_a_seller_index')->name('become_a_seller');

Route::group(['middleware' => 'auth:web'], function () {
    
    Route::prefix('myshop')->group(function () {

        Route::get('/', 'MyShopController@index')->name('myshop_index');

        Route::get('/store-management', 'MyShopController@store_management')->name('myshop_store_management');

        Route::get('/product', 'MyShopController@product')->name('myshop_product');
        Route::get('/product/view/{id}', 'MyShopController@product_detail')->name('myshop_product_detail');
        Route::get('/product/upload', 'MyShopController@product_upload')->name('myshop_product_upload');
        Route::post('/product/upload', 'MyShopController@product_upload_submitForm')->name('myshop_product_upload.submit');
        Route::get('/product/upload2', 'MyShopController@product_upload2')->name('myshop_product_upload2');
        Route::post('/product/upload2', 'MyShopController@product_upload_submitForm2')->name('myshop_product_upload.submit2');
        Route::get('/product/bulkupload', 'MyShopController@product_bulkupload')->name('myshop_product_bulkupload');
    
        Route::get('/order', 'MyShopController@order')->name('myshop_order');
        Route::get('/order/view/{id}', 'MyShopController@order_detail')->name('myshop_order_detail');
    
        Route::get('/notice', 'MyShopController@notice')->name('myshop_notice');
    
        Route::get('/cancel-refund-exchange', 'MyShopController@cancel_refund_exchange')->name('myshop_cancel_refund_exchange');
        Route::get('/cancel-refund-exchange/view/{id}', 'MyShopController@cancel_refund_exchange_detail')->name('myshop_cancel_refund_exchange_detail');
    
        Route::prefix('cooperation')->group(function () {
    
          Route::get('/', 'MyShopController@cooperation')->name('myshop_cooperation_index');
          Route::get('/list', 'MyShopController@cooperation_list')->name('myshop_cooperation_list');
    
        });
    
        Route::prefix('account')->group(function () {
    
          Route::get('/calculate', 'MyShopController@account_calculate')->name('myshop_account_calculate');
          Route::get('/payment-detail', 'MyShopController@account_payment_detail')->name('myshop_account_payment_detail');
          Route::get('/penalty', 'MyShopController@account_penalty')->name('myshop_account_penalty');
    
        });
    
        Route::get('/tax-bill', 'MyShopController@tax_bill')->name('myshop_tax_bill');
    
        Route::prefix('customer-service')->group(function () {
    
          Route::get('/product-inquiry', 'MyShopController@customer_service_product_inquiry')->name('myshop_customer_service_product_inquiry');
          Route::get('/product-review', 'MyShopController@customer_service_product_review')->name('myshop_customer_service_product_review');
          Route::get('/product-report', 'MyShopController@customer_service_product_report')->name('myshop_customer_service_product_report');
    
        });
    
        Route::prefix('aliseon-service')->group(function () {
    
          Route::get('/inquiry-ticket', 'MyShopController@aliseon_service_inquiry_ticket')->name('myshop_aliseon_service_inquiry_ticket');
          Route::get('/event-ticket', 'MyShopController@aliseon_service_event_ticket')->name('myshop_aliseon_service_event_ticket');
    
        });
    
        Route::get('/statistics', 'MyShopController@statistics')->name('myshop_statistics');
    
      });

});
