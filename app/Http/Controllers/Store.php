<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use DB;
class store extends Controller
{
    public static function all(){
        return DB::select("select *
                       from
                       store as s
                       inner join products as p
                       on s.product_id = p.id
                       order by id ASC
      ");
    }

    public static function getStore($id){
        return DB::select("select *
                       from
                       store as s
                       inner join products as p
                       on s.product_id = p.id
                       WHERE id = ?
      ",[$id]);
    }

    public static function addstore(){
        $store = array(
            'id' => Input::get('id'),
            'product_id' => Input::get('product_id'),
            'max_capacity' => Input::get('max_capacity'),
            'available'=> Input::get('available')
        );

        $inserted = DB::insert('INSERT INTO store (rack_id, product, max_capacity,available)
                    VALUE (?,?,?,?)',[
            $store['id'],
            $store['product_id'],
            $storeArray['max_capacity'],
            $storeArray['available']
        ]);

        if($inserted){
            return true;
        }else{
            return false;
        }
    }

    public static function addProductsToStore(){
        $productId = Input::get('product_id');
        $quantity = Input::get('quantity');
        if($quantity > 50){
            return false;
        }
        if(Warehouse::decreaseProduct($productId, $quantity)){
            $rackId = DB::select('SELECT rack_id from store where product_id = ?',[$productId]);
            foreach($rackId as $rack){
                DB::update('Update store set available = available + ? WHERE rack_id = ? ',[$quantity, $rack->rack_id]);
            }
            return true;
        } else
        die("Not available items in warehouse");
    }

    public function updatestore(){
        $categoryArray = array(
            'id' => Input::get('id'),
            'max_capacity' => Input::get('max_capacity'),
            'product' => Input::get('product_id'),
            'available' => Input::get('available')
        );

        $update = DB::update('UPDATE store SET
                    max_capacity = ?

                    WHERE rack_id = ?',
            $categoryArray['max_capacity'],
            $categoryArray['id']
        );
    }

    public function deleteProduct($rackId){
        return DB::delete('DELETE FROM category WHERE rack_id = ?', $rackId);
    }

    public static function decreaseProduct($id, $quantity){
        $available = DB::select('SELECT available from store where product_id = ?', [$id]);
        foreach ($available as $key) {
            $av = $key->available;
        }
        if($key < $quantity){
            die('Not enougn products available');
        }
            return DB::update('Update store set available = available - ? where product_id = ?',[$quantity,$id]);
    }


}
