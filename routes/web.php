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

/**
 * Dashboard
 */
//Route::redirect('/dashboard', '/dashboard/index');
Route::redirect('/dashboard', '/dashboard/index');
Route::get('/dashboard/index', 'Dashboard\IndexController@index')->name('dashboard-index');

/**
 * User
 */
Route::get('/user/{id}', 'UsersController@show')->name('user-show');
Route::get('/users', 'UsersController@index')->name('users-show');

/**
 * 404
 */
Route::view('/404', '404');

/**
 * Home
 */
Route::get('/', function () {
    return view('welcome');
})->name('home');

/**
 * Auth
 */
Route::get('/sign-up', 'SignUpController@show')->name('sign-up');
Route::post('/sign-up', 'SignUpController@submit')->name('sign-up-submit');

Route::get('/sign-in', 'SignInController@show')->name('sign-in');
Route::post('/sign-in', 'SignInController@submit')->name('sign-in-submit');

Route::get('/sign-out', 'SignInController@signOut')->name('sign-out');

/**
 * Subscribe & Unsubscribe
 */
Route::post('/user/subscribe', 'SubscribeController@submit')->name('subscribe-submit');
Route::get('/user/unsubscribe/{user}/{email}', 'UnsubscribeController@unsubscribe')->name('unsubscribe');
Route::get('/unsubscribe', 'UnsubscribeController@index')->name('unsubscribe-form');
Route::post('/unsubscribe/list', 'UnsubscribeController@show')->name('subscribtions-list');

/**
 * Dashboard posts
 */
Route::get('/dashboard/posts/create', 'Dashboard\PostsController@create')->name('posts-create');
Route::post('/dashboard/posts/store', 'Dashboard\PostsController@store')->name('posts-submit');
Route::get('/dashboard/posts/index', 'Dashboard\PostsController@index')->name('posts-index');
Route::get('/dashboard/posts/delete/{post}', 'Dashboard\PostsController@delete')->name('posts-delete');

/**
 * Emails
 */
Route::get('/dashboard/emails/send', 'Dashboard\SendEmailNewsController@send')->name('news-send');

/**
 * Voyager
 */
/*
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});*/
