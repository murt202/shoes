<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// General Routes
Route::get('about_us',[
    "as" => 'about_us',
    "uses" => 'UserController@showAboutPage'
]);

// Route::get('/', function() {
//     return redirect('home');
// });

Route::get('home',[
    "as" => 'home',
    "uses" => 'HomeController@showHome'
]);

Route::get('home-men',[
    "as" => 'home-men',
    "uses" => 'HomeController@showMen'
]);

Route::get('home-women',[
    "as" => 'home-women',
    "uses" => 'HomeController@showWomen'
]);

Route::get('home/show-cart', [
    "as" => "show-cart",
    "uses" => 'CartController@showCart'
]);

Route::post('home/add-cart', [
    "as" => "add-cart",
    "uses" => 'CartController@addToCart'
]);

Route::get('home/dashboard', [
    "as" => "dashboard",
    "uses" => 'DashboardController@showDashboard'
]);
Route::get('dashboard-user-count', 'DashboardController@userCount');

Route::post('home/checkout',[
    "as" => "checkout",
    "uses" => "CartController@checkout"
]);

Route::get('home/product',[
    "as" => "product",
    "uses" => "HomeController@showProduct"
]);


//User Routes

Route::post('login-post', [
    'as' => 'validate-login',
    'uses' => 'UserController@validateLogin'
]);
Route::get('register', [
    'as' => 'show-register-page',
    'uses' => 'UserController@showRegisterPage'
]);
Route::post('post-register', [
    'as' => 'post-register',
    'uses' => 'UserController@postRegister'
]);
Route::get('change-password', [
    'as' => 'change-password',
    'uses' => 'UserController@showChangePassword'
]);
Route::post('post-change-password', [
    'as' => 'post-change-password',
    'uses' => 'UserController@postChangePassword'
]);
Route::post('delete-user', [
    'as' => 'delete-user',
    'uses' => 'DashboardController@deleteUser'
]);


Route::post('delete-product-cart', [
    'as' => 'delete-product-cart',
    'uses' => 'CartController@deleteFromCart'
]);

Route::get('login', [
    'as' => "login",
    'uses' => 'UserController@showLoginPage'
]);

Route::get('logout', [
    'as' => "logout",
    'uses' => 'UserController@logout'
]);

//Admin routes

Route::post('delete-product', [
    'as' => 'delete-product',
    'uses' => 'AdminController@deleteProduct'
]);

Route::get('add-product', [
    'as' => 'add-product',
    'uses' => 'AdminController@showAddProduct'
]);

Route::get('edit-product',[
    'as' => 'edit-product',
    'uses' => 'AdminController@showEditProduct'
]);

Route::post('edit-product-post',[
    'as' => 'edit-product-post',
    'uses' => 'AdminController@editProduct'
]);

Route::post('add-product-post', [
    'as' => 'add-product-post',
    'uses' => 'AdminController@addProduct'
]);

Route::get('show-product', [
    'as' => 'show-product',
    'uses' => 'AdminController@showProduct'
]);


Route::post('edit-product', [
    'as' => 'edit-product',
    'uses' => 'AdminController@showEditProduct'
]);