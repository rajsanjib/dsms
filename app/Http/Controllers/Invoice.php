<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class Invoice extends Controller
{
    public function index($userId){
        $purchases = DB::select('
                            SELECT * FROM purchases pur
                            INNER JOIN products p
                            ON pur.product_id = p.id
                            WHERE customer_id = ?
                            ',[$userId]);
        Invoice::viewPage($purchases);
    }

    public function viewPage($purchases){
        return view('ds.invoice')->with('purchases',$purchases);
    }
}
