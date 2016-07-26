<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 7/24/16
 * Time: 11:35 AM
 */


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use DB;
use App\Http\Controllers\Controller;
use App\Http\Models\Product as mProduct;

class Employee extends Controller
{

    public static function all(){
        return DB::select("select * from employee");
    }

    public static function getEmployee($id){
        return DB::select("select * from employee where id = ?", [$id]);
    }

    public static function addEmployee(){
        $employeeArray = array(
            'first_name' => Input::get('first_name'),
            'middle_name' => Input::get('middle_name'),
            'last_name' => Input::get('last_name'),
            'date_joined' => Input::get('date_joined'),
            'email' => Input::get('email'),
            'contact_number' => Input::get('contact_number'),
            'address' => Input::get('address'),
            'dob' => Input::get('dob'),
            'gender' => Input::get('gender'),
            'position' => Input::get('position'),
            'salary' => Input::get('salary')

        );

        $inserted = DB::insert('INSERT INTO employee (first_name, middle_name,last_name,date_joined,email,contact_number,address,dob,gender,position,salary )
                    VALUE (?,?,?,?,?,?,?,?,?,?,?)',[
            $employeeArray['first_name'],
            $employeeArray['middle_name'],
            $employeeArray['last_name'],
            $employeeArray['date_joined'],
            $employeeArray['email'],
            $employeeArray['contact_number'],
            $employeeArray['address'],
            $employeeArray['dob'],
            $employeeArray['gender'],
            $employeeArray['position'],
            $employeeArray['salary']
        ]);

        if($inserted){
            return true;
        }else{
            return false;
        }
    }

    public function updateEmployee(Request $request){
        $employeeArray = array(
            'id' => Input::get('id'),
            'first_name' => Input::get('first_name'),
            'middle_name' => Input::get('middle_name'),
            'last_name' => Input::get('last_name'),
            'date_joined' => Input::get('date_joined'),
            'email' => Input::get('email'),
            'contact_number' => Input::get('contact_number'),
            'address' => Input::get('address'),
            'dob' => Input::get('dob'),
            'gender' => Input::get('gender'),
            'position' => Input::get('position'),
            'salary' => Input::get('salary')
        );

        $update = DB::update('UPDATE employee SET
                    first_name = ?,
                    middle_name = ?,
                    last_name = ?,
                    date_joined = ?
                    email = ?
                    contact_number = ?
                    address = ?
                    dob = ?
                    gender = ?
                    position = ?
                    salary = ?
                    WHERE id = ?',
            $employeeArray['first_name'],
            $employeeArray['middle_name'],
            $employeeArray['last_name'],
            $employeeArray['date_joined'],
            $employeeArray['email'],
            $employeeArray['contact_number'],
            $employeeArray['address'],
            $employeeArray['dob'],
            $employeeArray['gender'],
            $employeeArray['position'],
            $employeeArray['salary'],
            $employeeArray['id']

        );
    }

    public static function deleteProduct($employeeId){
        return DB::delete('DELETE FROM products WHERE id = ?', $employeeId);
    }

    public static function payEmployee(){
        $empId = Input::get('id');
        $paid = Input::get('paid_amount');
        $month = Input::get('for_month');

        DB::insert('INSERT INTO salary (employee_id, paid, month) VALUE (?,?,?)',[$empId, $paid, $month]);
        return;
    }

    public static function getSalaryRecord(){
        return DB::select('SELECT * FROM salary as s
                            inner join employee as e
                            on e.id = s.employee_id
        ');
    }


}
