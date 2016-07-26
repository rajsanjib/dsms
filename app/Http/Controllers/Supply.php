<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use DB;

class Supply extends Controller
{
    public static function all(){
        return DB::select('SELECT
                            s.id as sid,
                            s.date,
                            s.paid,
                            sp.name,
                            p.id as product_id,
                            p.product_name,
                            p.selling_price,
                            p.marked_price,
                            s.quantity
                            FROM supply as s
                            inner JOIN products p
                            on s.product_id = p.id
                            inner JOIN suppliers as sp
                            on s.supplier_id = sp.id
                            ');
    }

    public static function getSupply($id){
        return DB::select('SELECT
                            s.id as sid,
                            s.date,
                            s.paid,
                            sp.name,
                            p.id as product_id,
                            p.product_name,
                            p.selling_price,
                            p.marked_price,
                            s.quantity
                            FROM supply as s
                            inner JOIN products p
                            on s.product_id = p.id
                            inner JOIN suppliers as sp
                            on s.supplier_id = sp.id
                            WHERE s.id = ?
                            ',[$id]);
    }

    public static function allSuppliers(){
        return DB::select('SELECT * FROM suppliers');
    }

    public static function paySupply(){
        DB::insert('INSERT INTO pay_supply (supply_id, total_amount, paid_amount, date, accountant_id) VALUE (?,?,?,?,?)',[
                            Input::get('supply_id'),
                            Input::get('total_amount'),
                            Input::get('paid_amount'),
                            date('Y-m-d'),
                            Input::get('accountant_id')
                        ]);
        DB::insert('UPDATE supply SET paid = true WHERE id = ?',[Input::get('supply_id')]);
        return;

    }


    public static function addSupply(){
        $supply = array(
            'product_id' => Input::get('product_id'),
            'quantity' => Input::get('quantity'),
            'supplier_id' => Input::get('supplier_id'),
            'date' => date('Y-m-d')
        );


        $inserted = DB::insert('INSERT INTO supply (product_id,quantity, supplier_id, date)
                      VALUE (?,?,?,?)',[
                      $supply['product_id'],
                      $supply['quantity'],
                      $supply['supplier_id'],
                      $supply['date']
                  ]);

      if($inserted){
          Warehouse::addProductToRack($supply['product_id'], $supply['quantity']);
          return;
      }else{
          return false;
      }
    }


}
