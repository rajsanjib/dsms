<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use App\Http\Models\Product as mProduct;

class Purchase extends Controller
{

     public function index(){
         $custId = DB::select('select * from customers limit 1');
         foreach ($custId as $id) {
             $cId = $id->id;
         }
         return Purchase::viewPage($cId + 1);
     }

     public function viewPage($id){
         return view('ds.purchase')->with('customerId',$id);
     }

     public function add($request){
         $customerId = $request->input('customerId');
         $productId = $request->input('productId');
         $quantity = $request->input('quantity');
         $date = Carbon\Carbon::now(); // echo $mytime->toDateTimeString();

         DB::insert('insert into purchase (customer_id,
                        product_id,
                        quantity,
                        date_time)
                    values (?, ?, ?,? )',
                        [$customerId, $productId, $quantity, $date]
                    );
        $this->view($customerId);
     }

}
