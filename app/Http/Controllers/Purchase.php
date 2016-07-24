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
         $custId = DB::select('select * from customers limit 1');
         foreach ($custId as $id) {
             $cId = $id->customer_id;
         }
         print $cId;
         return Purchase::viewPage($cId + 1);
     }

     public function viewPage($id){
         return view('ds.purchase')->with('customerId',$id);
     }

     public function add(){
         $customerId = Input::get('customerId');
         $productId = Input::get('productId');
         $quantity = Input::get('quantity');
         $date = Carbon::now(); // echo $mytime->toDateTimeString();

         Customers::add($id);

         DB::insert('insert into purchases (
                        customer_id,
                        product_id,
                        quantity,
                        created_at)
                        values (?, ?, ?,? )',
                        [$customerId, $productId, $quantity, $date]
                    );
        return redirect('/purchase');
     }

}
