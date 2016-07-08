<?php

use App\Http\Controllers\Products;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    $products = new Products();
    $allProducts = $products->all();
    return view('ds.allProducts')->with('products',$allProducts);
});

Route::get('/products/{id}', function ($id) {
    $product = App\Http\Controllers\Products::find($id);
    return view('product.product')->with('product',$product);
});

Route::get('/store', function (){
    $store = App\Http\Controllers\Store::all();
    return view('store.show')->with('store',$store);
});

Route::get('/purchase', function() {
    $purchase = new App\Http\Controllers\Purchase;
    return $purchase->index();
});

Route::get('/purchase/add/', function() {
    $purchase = new App\Http\Controllers\Purchase;
    return $purchase->add();
});
