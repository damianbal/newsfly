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

Route::get('/dashboard/index', 'Dashboard\IndexController@index');

Route::get('/user/{id}', 'UsersController@show');

Route::view('/404', '404');

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/sign-up', 'SignUpController@show')->name('sign-up');
Route::post('/sign-up', 'SignUpController@submit')->name('sign-up-submit');

Route::get('/sign-in', 'SignInController@show')->name('sign-in');
Route::post('/sign-in', 'SignInController@submit')->name('sign-in-submit');