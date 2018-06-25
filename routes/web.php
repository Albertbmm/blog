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

//user route
Route::group(['namespace'=>'User'],function(){
  Route::get('/','HomeController@index');
  Route::get('post','PostController@index');

});

//user admin
Route::group(['namespace'=>'Admin'],function(){
  Route::get('admin','HomeController@index');
  //user route
  Route::resource('admin/user','UserController');
  //post route
  Route::resource('admin/post','PostController');
  //tag route
  Route::resource('admin/tag','TagController');
  //category route
  Route::resource('admin/category','CategoryController');
  Route::post('admin/category/create/ajax','CategoryController@getAjax');
  Route::post('admin/tag/create/ajax','TagController@getAjax');
});
// Route::get('/admin/post',function(){
//     return view('admin.post');
// });
//
// Route::get('/admin/tag',function(){
//     return view('admin.tag');
// });
//
// Route::get('/admin/categories',function(){
//     return view('admin.category');
// });
