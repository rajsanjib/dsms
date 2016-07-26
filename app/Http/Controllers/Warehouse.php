<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use DB;
class Warehouse extends Controller
{
    public static function all(){
        return DB::select("select *
                       from
                       warehouse as w
                       inner join products as p
                       on w.product = p.id
      ");
    }

    public static function decreaseProduct($id, $quantity){
        $available = DB::select('SELECT available from warehouse where product = ?', [$id]);
        if($available < $quantity){
            return false;
        }
            return DB::update('Update warehouse set available = available - ? where product = ?',[$quantity,$id]);
    }

    public static function addWarehouse(){
        $WarehouseyArray = array(
            'id' => Input::get('id'),
            'product_id' => Input::get('product_id'),
            'max_capacity' => Input::get('max_capacity'),
            'available'=> Input::get('available')
        );

        $inserted = DB::insert('INSERT INTO warehouse (rack_id, product, max_capacity,available)
                    VALUE (?,?,?,?)',
            $WarehouseyArray['id'],
            $WarehouseyArray['product_id'],
            $WarehouseArray['max_capacity'],
            $WarehouseArray['available']
        );

        if($inserted){
            return true;
        }else{
            return false;
        }
    }

    public static function addProductToRack($productId, $quantity){
        $rackId = DB::select('SELECT rack_id from warehouse where product = ?',[$productId]);
        foreach($rackId as $rack){
            DB::insert('Update warehouse set available = available + ? WHERE rack_id = ? ',[$quantity, $rack->rack_id]);
        }
    }

    public function updateWarehouse(){
        $categoryArray = array(
            'id' => Input::get('id'),
            'max_capacity' => Input::get('max_capacity'),
            'product' => Input::get('product_id'),
            'available' => Input::get('available')
        );

        $update = DB::update('UPDATE warehouse SET
                    max_capacity = ?

                    WHERE rack_id = ?',
            $categoryArray['max_capacity'],
            $categoryArray['id']
        );
    }

    public function deleteProduct($rackId){
        return DB::delete('DELETE FROM category WHERE rack_id = ?', $rackId);
    }

}
