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

Route::get('/', function () {
    return view('welcome');
});
Route::get('posts/{post}/comments/{comment}', function($postId, $commentId){
    return "post: $postId - comment: $commentId";
});

Route::get('user/{id}', function($id = null){
    return $id;
})->middleware('checkAge', 'checkName');

Route::resource('products', 'ProductController');
Route::resource('brands', 'BrandController');
Route::resource('users', 'UserController');
Route::resource('orders', 'OrderController');
Route::resource('order_details', 'OrderDetailController');
