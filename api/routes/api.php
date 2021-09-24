<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//A-Trend
Route::post('/atrend', 'AtrendController@get_atrend_list');
Route::post('/atrend/detail', 'AtrendController@get_atrend_detail');

//AdminUserController
Route::post('/adminuser/ticket', 'AdminUserController@get_ticket_list');
Route::post('/adminuser/ticket/post', 'AdminUserController@ticket_post');
Route::post('/adminuser/ticket/delete', 'AdminUserController@ticket_delete');
Route::post('/adminuser/ticket/edit', 'AdminUserController@ticket_edit');

//Auth
Route::post('/auth', 'AuthController@auth');
Route::post('/register', 'AuthController@register_create');
Route::post('/login', 'AuthController@login');
Route::post('/register/exist', 'AuthController@register_exist');
Route::post('/register/check', 'AuthController@register_check');
Route::post('/register/recommend', 'AuthController@register_recommend');

//Banner
Route::post('/banner', 'BannerController@get_banner_list');

//Category
Route::post('/category', 'CategoryController@get_category_list');
Route::post('/category1', 'CategoryController@get_category_list1');
Route::post('/category/test', 'CategoryController@get_category');
Route::post('/category/search', 'CategoryController@category_search');
Route::post('/test', 'CategoryController@get_option');
Route::post('/test2', 'CategoryController@get_option2');
Route::post('/guzzle', 'CategoryController@guzzle');

//Cart
Route::post('/cart', 'CartController@get_cart_list');
Route::post('/cart/update', 'CartController@cart_update');
Route::post('/cart/delete', 'CartController@cart_delete');

//Inquiry
Route::post('/inquiry/product', 'InquiryController@get_product_inquiry_list');
Route::post('/inquiry/product/close', 'InquiryController@product_inquiry_close');
Route::post('/inquiry/product/post', 'InquiryController@product_inquiry_post');
Route::post('/inquiry/product/message', 'InquiryController@product_inquiry_message');
Route::post('/inquiry/product/message/post', 'InquiryController@product_inquiry_message_post');
Route::post('/inquiry/order', 'InquiryController@get_order_inquiry_list');
Route::post('/inquiry/order/close', 'InquiryController@order_inquiry_close');
Route::post('/inquiry/order/post', 'InquiryController@order_inquiry_post');
Route::post('/inquiry/order/message', 'InquiryController@order_inquiry_message');
Route::post('/inquiry/order/message/post', 'InquiryController@order_inquiry_message_post');

//Order
Route::post('/order', 'OrderController@get_order_list');
Route::post('/order/post', 'OrderController@order_post');

//My
Route::post('/my/info', 'MyController@get_my_info');
Route::post('/my/list', 'MyController@get_my_list');

//Mail
Route::get('/mail/send','MailController@mail_post');

//MegaCreator
Route::post('/mega/apply', 'MegaCreatorController@megacreator_apply_post');
Route::post('/mega/confirm', 'MegaCreatorController@megacreator_confirm_post');

//Product
Route::post('/product/detail', 'ProductController@get_product_detail');
Route::post('/product/info', 'ProductController@get_product_info');
Route::post('/product/review', 'ProductController@get_product_review');
Route::post('/product/review/file/upload', 'ProductController@product_review_file_upload');
Route::post('/product/review/upload/result', 'ProductController@product_review_upload_result');
Route::post('/product/comment', 'ProductController@get_product_comment');
Route::post('/product/comment/post', 'ProductController@product_comment_post');
Route::post('/product/comment/detail', 'ProductController@get_product_comment_detail');
Route::post('/product/replies/post', 'ProductController@product_replies_post');
Route::post('/product/order', 'ProductController@get_product_order');
Route::post('/product/buy', 'ProductController@get_product_buy');
Route::post('/product/buy/cart', 'ProductController@get_product_buy_cart');

//Recommend
Route::post('/recommend/creator', 'RecommendController@get_recommend_creator');
Route::post('/recommend/contents', 'RecommendController@get_recommend_contents');

//Report
Route::post('/report/product', 'ReportController@get_product_report_list');
Route::post('/report/product/close', 'ReportController@product_report_close');
Route::post('/report/product/post', 'ReportController@product_report_post');
Route::post('/report/product/message', 'ReportController@product_report_message');
Route::post('/report/product/message/post', 'ReportController@product_report_message_post');
Route::post('/report/product/comment', 'ReportController@get_product_comment_report_list');
Route::post('/report/product/comment/close', 'ReportController@product_comment_report_close');
Route::post('/report/product/comment/post', 'ReportController@product_comment_report_post');
Route::post('/report/product/comment/message', 'ReportController@product_comment_report_message');
Route::post('/report/product/comment/message/post', 'ReportController@product_comment_report_message_post');
Route::post('/report/voyage', 'ReportController@get_voyage_report_list');
Route::post('/report/voyage/close', 'ReportController@voyage_report_close');
Route::post('/report/voyage/post', 'ReportController@voyage_report_post');
Route::post('/report/voyage/message', 'ReportController@voyage_report_message');
Route::post('/report/voyage/message/post', 'ReportController@voyage_report_message_post');
Route::post('/report/voyage/comment', 'ReportController@get_voyage_comment_report_list');
Route::post('/report/voyage/comment/close', 'ReportController@voyage_comment_report_close');
Route::post('/report/voyage/comment/post', 'ReportController@voyage_comment_report_post');
Route::post('/report/voyage/comment/message', 'ReportController@voyage_comment_report_message');
Route::post('/report/voyage/comment/message/post', 'ReportController@voyage_comment_report_message_post');

//Seller
Route::post('/seller/apply', 'SellerController@seller_apply_post');
Route::post('/seller/confirm', 'SellerController@seller_confirm_post');

//Store
Route::post('/store/recomm/products', 'StoreController@get_recommend_product_list');
Route::post('/store/recomm/shop', 'StoreController@get_recommend_shop_list');
Route::post('/store/recomm/cateproducts', 'StoreController@get_recommend_category_product');

//Subscribe
Route::post('/subscribe/to', 'SubscribeController@get_subscribeto_list');
Route::post('/subscribe/from', 'SubscribeController@get_subscribefrom_list');
Route::post('/subscribe/post', 'SubscribeController@subscribe_post');


//Tvott
Route::post('/tvott/users', 'TvottController@get_tvott_users');
Route::post('/tvott/users/add', 'TvottController@add_tvott_users');
Route::post('/tvott/users/delete', 'TvottController@delete_tvott_users');
Route::post('/tvott/popular', 'TvottController@get_popular_list');
Route::post('/tvott/popular/detail', 'TvottController@get_popular_detail');

//Test
Route::post('/test3', 'CategoryController@test');

//UserSetting
Route::post('/usersetting', 'UserSettingController@set_user_setting');
Route::post('/usersetting/profile', 'UserSettingController@set_user_profile_update');
Route::post('/usersetting/language', 'UserSettingController@set_user_language');
Route::post('/usersetting/country', 'UserSettingController@set_user_country');
Route::post('/usersetting/currency', 'UserSettingController@set_user_currency');
Route::post('/usersetting/user/phone', 'UserSettingController@get_user_phone');
Route::post('/usersetting/allowme', 'UserSettingController@user_allowme');
Route::post('/usersetting/hide', 'UserSettingController@user_hide');
Route::post('/usersetting/noti/subscribe', 'UserSettingController@user_noti_subscribe');
Route::post('/usersetting/noti/uploadcontents', 'UserSettingController@user_noti_upload_contents');
Route::post('/usersetting/noti/shippingproduct', 'UserSettingController@user_noti_shipping_product');
Route::post('/usersetting/noti/event', 'UserSettingController@user_noti_event');
Route::post('/usersetting/favcategory', 'UserSettingController@set_user_favcategory');
Route::post('/usersetting/changepw', 'UserSettingController@set_user_change_password');
Route::post('/usersetting/changephone', 'UserSettingController@set_user_change_phone');
Route::post('/usersetting/list', 'UserSettingController@user_list');
Route::post('/usersetting/country/list', 'UserSettingController@user_country_list');
Route::post('/usersetting/currency/list', 'UserSettingController@user_currency_list');
Route::post('/usersetting/language/list', 'UserSettingController@user_language_list');

//Voyage
Route::post('/voyage', 'VoyageController@get_voyage_list');
Route::post('/voyage/detail', 'VoyageController@get_voyage_detail');
Route::post('/voyage/delete', 'VoyageController@voyage_delete');
Route::post('/voyage/like', 'VoyageController@voyage_like');
Route::post('/voyage/comment/request', 'VoyageController@voyage_comment_request');
Route::post('/voyage/comment/post', 'VoyageController@voyage_comment_post');
Route::post('/voyage/comment/delete', 'VoyageController@voyage_comment_delete');
Route::post('/voyage/comment/edit', 'VoyageController@voyage_comment_edit');
Route::post('/voyage/replies/post', 'VoyageController@voyage_replies_post');
Route::post('/voyage/replies/delete', 'VoyageController@voyage_replies_delete');
Route::post('/voyage/replies/edit', 'VoyageController@voyage_replies_edit');
Route::post('/voyage/file/upload', 'VoyageController@voyage_file_upload');
Route::post('/voyage/upload/result', 'VoyageController@voyage_upload_result');