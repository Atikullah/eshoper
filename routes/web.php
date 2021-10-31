<?php

///*
//|--------------------------------------------------------------------------
//| Web Routes
//|--------------------------------------------------------------------------
//|
//| Here is where you can register web routes for your application. These
//| routes are loaded by the RouteServiceProvider within a group which
//| contains the "web" middleware group. Now create something great!
//|
//*/
//
//Route::get('/', function () {
//    return view('welcome');
//});
                        #Front.........!!

Route::get('/', 'publicController@Index')->name('index');
Route::get('/login_from', 'publicController@Login')->name('login');

                        #id_wise_product


Route::get('/categories_wise_product/{categori_id}','publicController@ShowCatWiseProduct')->name('categoriWiseProducr');
Route::get('/manufacture_wise_product/{manufacture_id}','publicController@manufacture_wise_product')->name('manufacture_wise_product');
Route::get('/View_product/{product_id}','publicController@Single_View_product')->name('View_product');

                        #cart...........!!

Route::get('/check_cart_list', 'CartController@check_cart_list')->name('check_cart_List');
Route::post('/add-to-cart', 'CartController@qty_add_to_cart')->name('add_to_cart');
Route::get('/delete_cart_pro{rowId}', 'CartController@delete_cart_pro')->name('delete_cart_pro');
Route::post('/update_qty','CartController@update_qty')->name('update_qty');


                        #CheckoutController.....!

Route::get('/login_checkout', 'CheckoutController@login_checkout')->name('login_checkout');
Route::post('/customer_sign_up', 'CheckoutController@Customer_sign_up')->name('customer_sign_up');
Route::get('/Customer_shipping', 'CheckoutController@Shipping')->name('Shipping');
Route::post('/shipping_data_submit', 'CheckoutController@shipping_data_submit')->name('shipping_data_submit');

                        #customer_logout..............!

Route::post('/customer_login', 'CheckoutController@customer_login')->name('customer_login');
Route::get('/customer_logout', 'CheckoutController@customer_logout')->name('customer_logout');

                        #customer_payment...............!

Route::get('/customer_payment', 'CheckoutController@customer_payment')->name('customer_payment');
Route::post('/payment_order', 'CheckoutController@payment_order')->name('payment_order');
Route::get('/order_information', 'CheckoutController@order_information')->name('order_information');
Route::get('/view_order_details/{view}', 'CheckoutController@view_order_details')->name('view_order_details');
Route::get('/delete_order_product/{delete}', 'CheckoutController@delete_order_product')->name('delete_order_product');










                        #Slider.....!!
                        #HOME SLIDER.....

Route::get('/homepageslider', 'SliderController@HomeSlider')->name('HomepageSlider');
Route::get('/home_allslider', 'SliderController@home_allsliderall')->name('home_allslider');
Route::post('/homepageslider/submit', 'SliderController@HomeSlidersubmit')->name('slider.submit');
Route::get('/reteive_homeslide', 'SliderController@reteive_homeslide')->name('home_allslider');
Route::get('/active_homeslide/{active}','SliderController@active_homeslide')->name('active_homeslide');
Route::get('/unactive_homeslide/{unactive}','SliderController@unactive_homeslide')->name('unactive_homeslide');
Route::get('/delete_homeslider/{delete}','SliderController@Delete_homeslider')->name('delete_homeslider');








Auth::routes();
                        #backend.....!!

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin_login', 'AdminController@admin_login_dashboard')->name('admin_login.page');
Route::get('/admin_reg_form', 'AdminController@admin_go_reg_from')->name('admin_login.reg_from');
Route::post('/admin_login', 'AdminController@admin_reg_submit')->name('admin_reg_form');
Route::post('/home', 'AdminController@admin_login_submit')->name('admin_login');


                            #categori......

Route::get('/addcategori', 'CategoryController@Add_categori')->name('side_admin.Add_categori');
Route::get('/allcategori', 'CategoryController@All_categori')->name('side_admin.All_categori');
Route::post('/submit/add_categori', 'CategoryController@SubmitAdd_Categori')->name('Add_categori.submit');
Route::get('/cat_unactive_cat/{UnActive_cat}', 'CategoryController@UnActive_cat_data')->name('all_cat.unactive_cat');
Route::get('/active_categori/{Active_cat}', 'CategoryController@Active_categori')->name('active_cat');
Route::get('/update_categori/{update_categori}', 'CategoryController@Update_categori')->name('all_Cat.update_categori');
Route::post('/update_categori_submit','CategoryController@Update_categori_submit')->name('update_cat.submit');
Route::get('/delete_categori/{delete_cat_info}','CategoryController@Delete_categori')->name('all_cat.delete_cat');

                            #Manufacture.....!!
Route::get('/manufacture', 'ManufactureController@Add_manufactures')->name('side_admin.add_manufactures');
Route::get('/all_manufacture', 'ManufactureController@All_manufactures')->name('side_admin.All_manufacture');
Route::post('/submit_add_manufacture', 'ManufactureController@Submit_add_manufacture')->name('add_manufacture.submit');
Route::get('/manufature_data_chech','ManufactureController@manufature_data_chech')->name('side_admin.All_manufacture');
Route::get('/unactive_manufature/{unactive}','ManufactureController@unactive_manufature')->name('all_manu.unactive_manufacture');
Route::get('/active_manufature/{active}','ManufactureController@active_manufature')->name('all_manu.active_manufacture');
Route::get('/update_manufature/{update_manufature}','ManufactureController@update_manufature')->name('all_manu.manu_update');
Route::post('/update_manufature_submit','ManufactureController@Update_manufature_submit')->name('update_manufacture.submit');
Route::get('/delete_manufature/{delete_manufature}','ManufactureController@Delete_manufature')->name('all_manu.manu_delete');
                            #product.....!!

Route::get('/add_product', 'ProductController@Add_product')->name('side_admin.Add_Products_click');
Route::post('/add_product_submit', 'ProductController@Add_product_submit')->name('add_product.submit');
Route::get('/all_product_check', 'ProductController@All_product_check')->name('side_admin.all_Products_click');
Route::get('/active_product/{active}','ProductController@active_product')->name('active_product');
Route::get('/unactive_product/{unactive}','ProductController@unactive_product')->name('unactive_product');
Route::get('/update_product/{update}','ProductController@Update_product')->name('update_product');
Route::get('/delete_product/{delete_product}','ProductController@Delete_product')->name('delete_product');
Route::post('/update_productsubmit','ProductController@Update_productsubmit')->name('product.submit');



