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



class SalaryController extends Controller
{


public function add_advancedemployees_salary_page_show(){

//emplay dropdown
 $all_employee_show_dropdown = Employee::where(['status'=>1])->get();

//show all salary
 $show_all_advanced_salary = Salary::with('many_salary')->get();


  //  echo "<pre>";
  // print_r($show_all_advanced_salary);
//  return $show_all_advanced_salary;
  return view('admin.salary.advanced_salary')->with(compact('all_employee_show_dropdown','show_all_advanced_salary'));


}
//add advance saalary form action

public function add_advancedsalary_formaction(Request $request){

  if($request->isMethod('post')){

  $data = $request->all();

   //$month= $data['month'];
  // $emp_id= $data['emp_id'];

   //$advanceed_salary = Salary::where(['month'=>$month,'emp_id'=>$emp_id])->first();




//mont and emp_id check korlam j salary dici ki na
   $my_salary = Salary::where(['month'=>$data['month'],'emp_id'=>$data['emp_id']])->count();

    if($my_salary>0){


  return redirect('/add_advancedemployees_salary')->with('flash_message_error','Sorry Employee already take advanced salary this month');

     }else{



      $salary = new Salary ;
      $salary->emp_id = $data['emp_id'];
      $salary->advanced= $data['advanced'];
      $salary->month= $data['month'];
      $salary->year= $data['year'];



         $salary->save();



    return redirect('/add_advancedemployees_salary')->with('flash_message_error','Employee take advanced salary successfully');


     }
   // print_r($emp_id);
          }

}


//edit salary page show

public function edit_slary_page_show($id){


  $all_employee_show_dropdown = Employee::get();

$placeholder_value_employees = Salary::where(['id'=>$id])->first();



return view('admin.salary.edit_advanced_salary')->with(compact('placeholder_value_employees','all_employee_show_dropdown'));


}

//salary edit form action route


public function edit_advanced_salary_form_action(Request $request,$id){

if($request->isMethod('post')){

 $data = $request->all();

   Salary::where(['id'=>$id])->update(['emp_id'=>$data['emp_id'],'advanced'=>$data['advanced'],'year'=>$data['year'],'month'=>$data['month']]);


    return redirect('/add_advancedemployees_salary')->with('flash_message_error','Advanced salary option update successfully');


}



}



//active advanced salary unactive

public function active_advanced_salary_unactive($id){

  Salary::where(['id'=>$id])->update(['status'=> 0]);
 return redirect('/add_advancedemployees_salary')->with('flash_message_error','Active advanced salary unactive');





}

//unactive advanced salary active

public function unactive_advanced_salary_active($id){

  Salary::where(['id'=>$id])->update(['status'=> 1]);
 return redirect('/add_advancedemployees_salary')->with('flash_message_error','Unctive advanced salary active');


}

//advanced alary delate route

  public function delete_advanced_salary($id){

Salary::where(['id'=>$id])->delete();
return redirect('/add_advancedemployees_salary')->with('flash_message_error','Advanced salary delete successfully');


  }



}
