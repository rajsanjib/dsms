<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Products extends Controller
{

  public function allProducts(){
    return Products::all();
  }

  public function addProduct(){
    // TODO: Get input values request
    // TODO: validate inputs
    // TODO: add product in table products
  }

  public function deleteProduct($productId){
    return Products::delete($productId);
  }

  public function getProduct($productId){
    return Products::get($productId);
  }
