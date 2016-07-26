<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Carbon\Carbon;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Models\Product as mProduct;

class Purchase extends Controller
{

     public function index(){
         return Purchase::viewPage($cId + 1);
     }

     public static function getNextToken(){
         return DB::select('SELECT max(token) as token from sales');
     }

     public static function add(){
         $productId = Input::get('product_id');
         $quantity = Input::get('quantity');
         $date = date('Y-m-d');
         $token = Input::get('token');

         $row = DB::select('select selling_price from products where id = ?', [$productId]);
         foreach($row as $p){
             $selling_price = $p->selling_price;
         }

         $totalPrice = $quantity * $selling_price;

         DB::insert('insert into sales (
                        product_id,
                        quantity,
                        created_at,
                        total_price,
                        token)
                        values (?,?,?,?,? )',
                        [$productId, $quantity, $date, $totalPrice, $token]
                    );
        Store::decreaseProduct($productId, $quantity);
        return redirect('/purchase');
     }

     public static function getInvoice($token){
         return DB::select('Select * from
                            sales as s
                            inner join products as p
                            on s.product_id = p.id
                            where token = ?
                            ', [$token]);
     }

}
