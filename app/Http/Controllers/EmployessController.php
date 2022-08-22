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

class EmployessController extends Controller
{



//add employ page show
public function add_employees_page_show(){



$all_employees = Employee::get();


return view('admin.employees.add_employees')->with(compact('all_employees'));

//echo "hi";

}

//add emplays form action

public function addemployees_formaction(Request $request){

  if($request->isMethod('post')){

  $data = $request->all();


  $employees = new Employee;
  $employees->name= $data['name'];
  $employees->email= $data['email'];
  $employees->phone= $data['phone'];
  $employees->address= $data['address'];
  $employees->nid= $data['nid'];
  $employees->exprience= $data['exprience'];
  $employees->salary= $data['salary'];
  $employees->vacation= $data['vacation'];
  $employees->city= $data['city'];
  if($request->hasFile('photo')){
          $image = $request->file('photo');
          $img = time().'.'.$image->getClientOriginalExtension();

          //$filename = rand(111,99999).'.'.$img;


          $large_image_location = public_path('images/employees/large/'.$img);

                   Image::make($image)->save($large_image_location);


                $employees->photo = $img;


        }


         $employees->save();
   //sub category er jonno ai parant id ta

//$section->save();
return redirect('/add_employees')->with('flash_message_error','Employees added successfully');


}



}

//employees delate

public function deleteemployees($id){


 Employee::where(['id'=>$id])->delete();
return redirect('/add_employees')->with('flash_message_error','Employee delate successfully');



}

//active employees unactive

public function activeemployees_unactive($id){

 Employee::where(['id'=>$id])->update(['status'=> 0]);
return redirect('/add_employees')->with('flash_message_error','Active Employee unactive');


}



//unactive employees active

public function unactiveemployees_active($id){

 Employee::where(['id'=>$id])->update(['status'=> 1]);
return redirect('/add_employees')->with('flash_message_error','Unctive Employee active');


}

//employees edit form action

public function edit_employees_page_show($id){

          $placeholder_value_employees =  Employee::where(['id'=>$id])->first();
          return view('admin.employees.edit_employees')->with(compact('placeholder_value_employees'));



}
  //edit employees form action

  public function edit_employess_form_action(Request $request,$id){

          if($request->isMethod('post')){
                $data = $request->all();

                if($request->hasFile('photo')){

    $image = $request->file('photo');
    $img = time().'.'.$image->getClientOriginalExtension();

    $large_image_location = public_path('images/employees/large/'.$img);


    Image::make($image)->save($large_image_location);




  }else{


  $img = $data['current_image'];


  }

  Employee::where(['id'=>$id])->update(['name'=>$data['name'],'address'=>$data['address'],'phone'=>$data['phone'],'email'=>$data['email'],'nid'=>$data['nid'],'exprience'=>$data['exprience'],
  'salary'=>$data['salary'],'vacation'=>$data['vacation'],'city'=>$data['city'],'photo'=>$img]);

return redirect('/add_employees')->with('flash_message_error','Employees upadate Successfully');


          }



  }

//view employees page show

public function view_employees_page_show($id){


 //$employees_information = Employee::where(['id'=>$id])->first();



 //$today = date('d-m-y');
 //$my_attendance = Employee::with('many_addentdances')->where(['id'=>$id])->first()->sum('addentdance');

 //      $employees_information = DB::table('employees')
 //                          ->join('attentdances','employees.id','attentdances.user_id')
 //              // ->select('employees.id','attentdances.attentdance')
 //                          ->where('employees.id',$id)
 //                          ->first();
 // //


 $employees_information = DB::table('employees')
 ->join('attentdances','employees.id','attentdances.user_id')
 ->where('employees.id',$id)
 ->first();

 $today = date("d-m-y");
 $today_attendance = DB::table('employees')
 ->join('attentdances','employees.id','attentdances.user_id')
  ->where('employees.id',$id)
  ->where('attentdances.att_date',$today)
    ->first();

 // echo "<pre>";
 // print_r($today_attendance);


 $total_attendance = DB::table('employees')
 ->join('attentdances','employees.id','attentdances.user_id')
 ->where('employees.id',$id)
 ->get()->sum('attentdance');


//
$current_month = date("F");

$this_month_attendances = DB::table('employees')
->join('attentdances','employees.id','attentdances.user_id')
 ->where('employees.id',$id)
 ->where('attentdances.att_month',$current_month)
   ->sum('attentdance');




$total_class = DB::table('attentdances')->select('user_id')->groupBy('user_id')->count('att_date');
// echo "<pre>";
// print_r($all_attendance);
//return $month_date;


//return $my_attendance;
//return $informatino;
//return $employees_information;
return view('admin.employees.view_employees')->with(compact('employees_information','today_attendance','this_month_attendances','total_attendance','total_class'));


}




}
