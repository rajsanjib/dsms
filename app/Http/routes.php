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

Route::get('/login', function () {
    return view('ds.login');
});

Route::get('/login/validate', function () {
    return App\Http\Controllers\Login::checkLogin();
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
    return view('ds.product')->with('product',$product);
});


/*
*
*/
Route::get('/purchase', function() {
    $purchase = App\Http\Controllers\Purchase::getNextToken();
    return view('ds.purchase')->with('purchase',$purchase);
});

Route::get('/purchase/add', function() {
    App\Http\Controllers\Purchase::add();
    return redirect(url('/purchase'));
});

Route::get('/checkout/{token}', function($token){
    $purchase = App\Http\Controllers\Purchase::getInvoice($token);
    return view('ds.invoice')->with('purchase', $purchase);

});

Route::get('/employee', function(){
    $employee = App\Http\Controllers\Employee::all();
    return view('ds.allemployee')->with('employee',$employee);
});

Route::get('/employee/add', function(){
    return view('ds.addEmployee');
});

Route::get('/employee/add/true', function(){
    App\Http\Controllers\Employee::addEmployee();
    return view('ds.addEmployee');
});

Route::get('/employee/edit/{id}', function($id){
    $employee = App\Http\Controllers\Employee::getEmployee($id);
    return view('ds.allemployee')->with('employee',$employee);
});

Route::get('/employee/pay/{id}', function($id){
    $employee = App\Http\Controllers\Employee::getEmployee($id);
    return view('ds.pay_employee')->with('employee',$employee);
});

Route::get('/employee/paid', function(){
    App\Http\Controllers\Employee::payEmployee();
    return redirect(url('/employee'));
});

Route::get('/supply', function(){
    $supplies = App\Http\Controllers\Supply::all();
    return view('ds.allSupply')->with('supplies',$supplies);
});

Route::get('/supply/add', function(){
    return view('ds.addSupply');
});

Route::get('/supply/add/send', function(){
    $supply = App\Http\Controllers\Supply::addSupply();
    return view('ds.addSupply');
});

Route::get('/suppliers', function(){
    $suppliers = App\Http\Controllers\Supply::allSuppliers();
    return view('ds.allSuppliers')->with('suppliers',$suppliers);
});

Route::get('/store', function(){
    $stores = App\Http\Controllers\Store::all();
    return view('ds.allStore')->with('stores',$stores);
});

Route::get('/store/addProducts/{id}', function($id){
    $info = App\Http\Controllers\Store::getStore($id);
    return view('ds.addProductsInStore')->with('info', $info);
});

Route::get('/store/productAdded', function(){
    $addition = App\Http\Controllers\Store::addProductsToStore();
    if($addition){
        return redirect(url('/store'));
    } else
    die("Product could not be fetched");
});

Route::get('/supply/pay/{id}', function($id){
    return view('ds.paysupply')->with('id', $id);
});

Route::get('/supply/paid', function(){
    App\Http\Controllers\Supply::paySupply();
    return redirect(url('supply'));
});

Route::get('/warehouse', function(){
    $stores = App\Http\Controllers\Warehouse::all();
    return view('ds.warehouse')->with('stores',$stores);
});

Route::get('salaryrecord', function(){
    $employee = App\Http\Controllers\Employee::getSalaryRecord();
    return view('ds.salaryRecord')->with('employee',$employee);
});
