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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');


Route::get('/produit/{index}', 'VenteController@produit')->name('produit');
Route::post('/produit/{produit}', 'VenteController@stock_change')->name('stock_change');

Route::get('panier', 'VenteController@panier')->name('panier');
Route::get('add_to_panier/{id_produit}', 'VenteController@add_to_panier')->name('add_to_panier');

Route::get('/admin', 'AdminController@admin')->name('admin');
Route::post('/admin/add', 'AdminController@new_produit')->name('add_produit');
