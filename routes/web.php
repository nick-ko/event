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
    return view('login');
});

Route::get('events', 'EventController@event');
Route::get('dashboard', [
    'as'=>'dashboard',
    'uses'=>'WebController@dashboard'
]);
Route::get('evenement', [
    'as'=>'event',
    'uses'=>'EventController@index'
]);
Route::get('reservation', [
    'as'=>'booking',
    'uses'=>'WebController@book'
]);
Route::get('category', [
    'as'=>'category',
    'uses'=>'WebController@category'
]);
Route::get('utilisateur', [
    'as'=>'users',
    'uses'=>'WebController@users'
]);

Route::get('admin', [
    'as'=>'admin',
    'uses'=>'WebController@admin'
]);
Route::post('login', [
    'uses'=>'WebController@login'
]);

Route::get('logout', [
    'as'=>'logout',
    'uses'=>'WebController@logout'
]);
