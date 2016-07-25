<?php

use App\Http\Controllers\Products;
use Illuminate\Http\Request;
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
    $allProducts = Products::all();
    return view('ds.allProducts')->with('products',$allProducts);
});

Route::get('/products/add', function(){
    return view('ds.addProducts');
});

Route::get('/products/delete/{id}', function($id){
    Products::deleteProduct($id);

    url('Location: products');
});

Route::get('/products/update/{id}', function($id){
    $products = Products::one($id);
    return view('ds.updateProduct')->with('products', $products);
});

Route::get('/products/updateTrue', function(Request $request){
    $productArray = array(
        'id' => $request->input('id'),
        'product_name' => $request->input('product_name'),
        'marked_price' => $request->input('marked_price'),
        'selling_price' => $request->input('selling_price'),
        'category_id' => $request->input('category_id'),
        'brand_id' => $request->input('brand_id')
    );
    Products::updateProducts($productArray);
    return redirect('/products');
});

Route::get('/products/add/send', function(Request $request){
    $productArray = array(
        'id' => $request->input('id'),
        'product_name' => $request->input('product_name'),
        'marked_price' => $request->input('marked_price'),
        'selling_price' => $request->input('selling_price'),
        'category_id' => $request->input('category_id'),
        'brand_id' => $request->input('brand_id')
    );

    Products::insertProducts($productArray);
    return view('ds.addProducts');
});


Route::get('/products/{id}', function ($id) {
    $product = App\Http\Controllers\Products::all($id);
    return view('product.product')->with('product',$product);
});

Route::get('/store', function (){
    $store = App\Http\Controllers\Store::all();
    return view('store.show')->with('store',$store);
});

/*
*
*/
Route::get('/purchase', function() {
    $purchase = App\Http\Controllers\Purchase::getNextToken();
    return view('ds.purchase')->with('purchase',$purchase);
});

Route::get('/purchase/add', function() {
    $purchase = App\Http\Controllers\Purchase::add();
    return view('ds.purchase')->with('purchase',$purchase);
});

/**
* Add products to purchase list
*/
Route::get('/purchase/add/', function() {
    $purchase = new App\Http\Controllers\Purchase;
    return $purchase->add();
});

Route::get('/checkout/{token}', function($token){
    $purchase = App\Http\Controllers\Purchase::getInvoice($token);
    return view('ds.invoice')->with('purchase', $purchase);

});

Route::get('/employee', function(){
    $employee = App\Http\Controllers\Employee::getEmployee();
    return view('ds.allemployee')->with('employee',$employee);
})

/*
* Checkout
* Take to invoice Page
*/
Route::get('/invoice/{custId}', function($custId) {
    $purchase = new App\Http\Controllers\Invoice;
    return $purchase->index($custId);
});
