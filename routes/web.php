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

Route::view('/','home');

Route::get('/post','PostController@showAllPost');

Route::get('/categories','Category@showAllCategories')->name('categories');

Route::view('/add/category','addcategory')->name('add.category');

Route::post('/store/category','Category@storeCategory')->name('store.category');

Route::get('/edit/category/{id}','Category@showEditCategoryView');

Route::post('/update/category/{id}','Category@updateCategory');

Route::get('/delete/category/{id}','Category@deleteCategory');

Route::get('/add/post/','PostController@addPostView')->name('add.post');

Route::post('/store/post','PostController@storePost')->name('store.post');

Route::resource('/student','StudentController');





