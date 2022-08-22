<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

use Auth;
Use Image;
use Session;
session_start();


use DB;

use App\Employee;
use App\Costomer;
use App\Salary;
use App\Paysalary;



class PaysalaryController extends Controller
{



public function pay_salary_page_show(){

  $month = date("F" , strtotime('-1 month'));
 $all_employee_information_with_advanced= Employee::with('many_relation_salary')->get();
//
//   $all_employee_information_with_advanced= Employee::with('many_relation_salary')->get();
//
//
//   //show all salary
// //  $show_pay_salary = Paysalary::with('many_pay_salary')->get();
// // $show_all_advanced_salary = Salary::with('many_salary')->where(['month'=>$month])->get();
//
//    //echo $month;
//
//
//       //echo"<pre>";
// //return $all_employee_show_dropdown;
//  //return $show_all_advanced_salary;

//$order_product = DB::table('orderdetails')
// ->join('products','orderdetails.product_id','products.id')
// ->where('order_id',$id)->get();

// $all_employee_information_with_advanced = DB::table('employees')
//                                         ->join('salaries','employees.id','salaries.emp_id')
//                                         -
//                                         ->get();
//



// return $all_employee_information_with_advanced;
 return view('admin.salary.pay_salary')->with(compact('all_employee_information_with_advanced',));


}




}
