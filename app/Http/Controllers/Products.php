<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use App\Http\Models\Product as mProduct;
use Illuminate\Http\Request;

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

  public static function insertProducts($productArray){

      $inserted = DB::insert('INSERT INTO products (id, product_name, marked_price, selling_price, category_id, brand_id)
                    VALUE (?,?,?,?,?,?)',[
                    $productArray['id'],
                    $productArray['product_name'],
                    $productArray['marked_price'],
                    $productArray['selling_price'],
                    $productArray['category_id'],
                    $productArray['brand_id']
                ]);

    if($inserted){
        return true;
    }else{
        return false;
    }
  }

  public function updateProducts(Request $request){
      $productArray = array(
          'id' => $request->input('id'),
          'product_name' => $request->input('product_name'),
          'marked_price' => $request->input('marked_price'),
          'selling_price' => $request->input('selling_price'),
          'category_id' => $request->input('category_id'),
          'brand_id' => $request->input('brand_id')
      );

      $update = DB::update('UPDATE products SET
                    product_name = ?,
                    marked_price = ?,
                    selling_price = ?,
                    category_id = ?,
                    brand_id = ?
                    WHERE id = ?',
                $productArray['product_name'],
                $productArray['marked_price'],
                $productArray['selling_price'],
                $productArray['category_id'],
                $productArray['brand_id'],
                $productArray['id']
            );
  }

  public function deleteProduct($productId){
    return DB::delete('DELETE FROM products WHERE product_id = ?', $product_id);
  }

  public function getProduct($productId){
    return Products::get($productId);
  }
}
