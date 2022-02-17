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
Route::get('/', function(){
    return redirect()->route('products.index');
})->name('bottom');

Route::prefix('products')
    ->as('products.')
    ->group(function (){
        Route::get('index', 'ProductsController@index')
            ->name('index');
        Route::get('show/{id}', 'ProductsController@show')
            ->name('show');
        Route::post('store', 'ProductsController@store')
            ->name('store');
        Route::put('update/{id}', 'ProductsController@update')
            ->name('update');
            Route::delete('delete/{id}', 'ProductsController@delete')
        ->name('delete');

    });

Route::prefix('customers')
    ->as('customers.')
    ->group(function (){
        Route::get('index', 'CustomersController@index')
            ->name('index-customer');
            Route::get('json', 'CustomersController@json')
            ->name('json-customer');
    });
