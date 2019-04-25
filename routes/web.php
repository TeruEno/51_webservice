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

Route::get('/', function () {
    return view('welcome');
});

// URL, コントローラー名@メソッド名
// 
Route::get('/', 'WelcomeController@index');

// 投稿関連
Route::get('/posts', 'PostController@index');

// 投稿フォームページ
Route::post('/posts','PostController@showCreateForm')->name('posts.create');
Route::get('/posts/create', 'PostController@create');

// 投稿確認ページ
// ->name('');は呼び名を決めている
Route::get('/post/{post}', 'PostController@detail')->name('posts.detail');

Route::post('/posts/store','PostController@store');



// Auth関連
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', function() {
    // 認証済みのユーザーのみが入れる
})->middleware('/auth.basic');



// ユーザー情報関連
// マイページ画面の表示
Route::get('users', 'UserController@index');
// 編集画面の表示
Route::get('users/{id}', 'UserController@show');
// 編集処理
Route::post('users/{id}', 'UserController@edit');
