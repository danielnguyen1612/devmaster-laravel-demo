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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::match(['GET', 'POST'], '/class/add', 'ClassController@addNew');
Route::get('/class/{page?}', 'ClassController@listClasses');

Route::match(
    ['get', 'post'],
    '/login',
    'AuthenticateController@login'
)->middleware('non_auth_mw');
Route::get(
    '/home',
    'HomeController@indexAction'
)->middleware('auth_mw');
