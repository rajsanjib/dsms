<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

class Login extends Controller
{
    public static function checkLogin(){
        $username = Input::get('username');
        $pw = Input::get('password');
        $result = DB::select('SELECT password FROM users WHERE name = ?', [$username]);
        if($result){
            return redirect(url('/products'));
        } else{
            return view('ds.login');
        }
    }
}
