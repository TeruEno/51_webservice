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

Route::get('/', 'WelcomeController@index');

Route::get('contact', 'WelcomeController@contact');

Route::get('about', 'PagesController@about');

Route::get('posts', 'PostController@index');

// 投稿フォームページ
Route::post('/posts','PostController@showCreateForm')->name('posts.create');
Route::post('/post', 'PostoController@create');

// 投稿確認ページ
Route::get('/post/{post}', 'PostController@detail')->name('posts.detail');

Route::post('posts/store','PostController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile', function() {
    // 認証済みのユーザーのみが入れる
})->middleware('auth.basic');

Route::resource('users', 'UserController');