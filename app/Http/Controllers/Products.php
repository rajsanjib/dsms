<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use App\Http\Models\Product as mProduct;

class Products extends Controller
{

  public function all(){
      return DB::select("select
                    p.id,
                    p.product_name,
                    p.selling_price,
                    p.marked_price,
                    c.category_name,
                    b.brand_name
                    from
                    products p
                    INNER JOIN categories  c
                    ON p.category_id = c.id
                    INNER JOIN brands b
                    ON p.brand_id = b.id
      ");
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
}
