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

//route Dashboard
Route::get('/dashboard','Admin\DashboardController@showadmin')->name('dashboard');

//route content
Route::get('/content','Admin\contentController@showadmin')->name('content');

//route content2
Route::get('/content2','Admin\content2Controller@showadmin')->name('content2');

//route product
Route::get('/product','Admin\productController@showproduct')->name('product');
Route::post('/admin/product/product','Admin\productController@create')->name('product.c');
Route::get('admin/product/edit/{id}','Admin\productController@edit');
Route::post('/admin/product/update/{id}','Admin\ProductController@update');
Route::get('/admin/product/delete/{id}','Admin\ProductController@delete');

//
Route::get('/','MainController@product');

//route organizer
Route::get('/organizer','Admin\organizerController@showorganizer')->name('organizer');
Route::post('/admin/organizer/organizer','Admin\organizerController@create')->name('organizer.c');
Route::get('admin/organizer/edit/{id}','Admin\organizerController@edit');
Route::post('/admin/organizer/update/{id}','Admin\organizerController@update');
Route::get('/admin/organizer/delete/{id}','Admin\organizerController@delete');

//route category
Route::get('/category','Admin\categoryController@showcategory')->name('category');
Route::post('/admin/category/category','Admin\categoryController@create')->name('category.c');
Route::get('admin/category/edit/{id}','Admin\categoryController@edit');
Route::post('/admin/category/update/{id}','Admin\categoryController@update');
Route::get('/admin/category/delete/{id}','Admin\categoryController@delete');

//route background
Route::get('/background','Admin\backgroundController@showbackground')->name('background');

//route user
Route::get('/user','Admin\userController@showuser')->name('user');
Route::get('/admin/user/delete/{id}','Admin\userController@delete');

//route addcontent
Route::get('/addcontent','Admin\addcontentController@showaddcontents')->name('addcontent');
//route editcontent
Route::get('/addcontent2','Admin\addcontent2Controller@showaddcontents')->name('addcontent2');
//route addadmint
Route::get('/addproduct','Admin\addproductController@showaddproduct')->name('addproduct');
//route addcategory
Route::get('/addcategory','Admin\addcategoryController@showaddcategory')->name('addcategory');
//route addadminp
Route::get('/addorganizer','Admin\addorganizerController@showaddorganizer')->name('addorganizer');
//route addadminc
Route::get('/addproducttype','Admin\addproducttypeController@showaddproducttype')->name('addproducttype');
//route addadminh
Route::get('/addbackground','Admin\addbackgroundController@showaddbackground')->name('addbackground');
//route addadminh
Route::get('/adduser','Admin\adduserController@showadduser')->name('adduser');

//route editcontent
Route::get('/editcontent','Admin\editcontentController@showeditcontent')->name('editcontent');
//route Editadminb
Route::get('/editcontent2','Admin\editcontent2Controller@showeditcontent')->name('editcontent2');
//route Editadmint
Route::get('/editproduct','Admin\editproductController@showeditproduct')->name('editproduct');
//route Editadminp
Route::get('/editorganizer','Admin\editorganizerController@showeditorganizer')->name('editorganizer');
//route Editadminc
Route::get('/editproducttype','Admin\editproducttypeController@showeditproducttype')->name('editproducttype');
//route Editadminh
Route::get('/editbackground','Admin\editbackgroundController@showeditbackground')->name('editbackground');
//route Editadminh
Route::get('/edituser','Admin\edituserController@showedituser')->name('edituser');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


