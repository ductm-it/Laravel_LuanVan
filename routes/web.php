<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers;

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
    return view('pages.home');
});


Route::get('/dashboard', function () {
    return view('pages.home');
})->name('dashboard');


Route::get('/category', 'CategoryController@index')->name('category');
Route::post('category', 'CategoryController@getinfor');

Route::get('/compare', function () {
    return view('pages.compare_request');
})->name('compare');
