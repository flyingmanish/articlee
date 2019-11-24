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

// Route::get('/', function () {
// 	// dd("Wleome");
//     return view('welcome');
// });
Route::get("/articles", 'UserController@articles');
Route::get("/", 'UserController@readArticles');
Route::get("/getData", 'UserController@getData');
