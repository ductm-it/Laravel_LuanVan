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


Route::get('/', 'HomeController@index')->name('dashboard');


Route::get('/test', 'CategoryController@index')->name('category1');

Route::post('/category', 'FilterController@products' )->name('loadProduct');
Route::get('/category', 'FilterController@index')->name('category');
Route::get('/category/{id_url_product}','CategoryController@show')->name('product.show');
Route::get('/recommend', 'RecommendController@index')->name('recommend');

Route::get('/ajax-subcat', function(){
    $cat_id = Input::get('cat_id');
    $subcategories = Product::where('id_url_product', '=', $cat_id )->get();
    return Response::json( $subcategories);
});

Route::get('/compare', 'FilterController@compare')->name('compare');
//Route::get('/compare/{id_url_product}','CategoryController@show')->name('product.show');



