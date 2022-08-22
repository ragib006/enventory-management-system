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
use App\Attentdance;

class AttentdanceController extends Controller
{



public function today_attentdance_page_show(){


$all_employees = Employee::where(['status'=>1])->get();

//echo "<pre>";
//print_r($all_employees);
   return view('admin.attentdance.today_attentdance')->with(compact('all_employees'));


}

//today attentdance form action



public function today_attentdance_form_action(Request $request){

$date=$request->att_date;


 ////$check_attentdence = Attentdance::where(['att_date'=>$data['att_date']])->count();
  $check_attentdence=DB::table('attentdances')->where('att_date',$date)->first();
    if($check_attentdence){

  return redirect('/today_attentdance')->with('flash_message_error','Sorry!! You Already Take Attentdence Today');

}else{




    foreach($request->user_id as $id){

     $data[]=[

      "user_id"=>$id,
      "attentdance"=>$request->attentdance[$id],
      "att_date"=>$request->att_date,
      "att_year"=>$request->att_year,
      "att_month"=>date("F")


     ];


    }



      $att=DB::table('attentdances')->insert($data);



       return redirect('/today_attentdance')->with('flash_message_error','Attendance Take Successfully');

   }























}

//all attendance page show




public function all_attentdance_page_show(){

  // echo "hi";
$all_attendance = DB::table('attentdances')->select('att_date','att_month')->groupBy('att_date','att_month')->get();

//echo "</pre>";
//print_r($all_attendance);
  //return $all_attendance;

return view('admin.attentdance.all_attentdance')->with(compact('all_attendance'));

}



public function view_attendance_page_show($att_date){



$past_date = Attentdance::where(['att_date'=>$att_date])->first();
//$data=$request->att_date;
$view_attendance_date_wise = Attentdance::with('my_attendance')->where(['att_date'=>$att_date])->get();

//$date_show = DB::table('attentdances')->select('att_date')->groupBy('att_date')->get();

//return $date_show;
return view('admin.attentdance.view_attendance')->with(compact('view_attendance_date_wise','past_date'));





}














//edit attendance

public function edit_attendance_page_show($att_date){


//echo "hi";
//$all_employees = Employee::where(['status'=>1])->get();

$past_date = Attentdance::where(['att_date'=>$att_date])->first();

$edit_attendance_date_wise = Attentdance::with('my_attendance')->where(['att_date'=>$att_date])->get();

//return $past_date;
return view('admin.attentdance.edit_attendance')->with(compact('edit_attendance_date_wise','past_date'));


}


//view attendance













//edit attendance form Action

//public function edit_attentdance_form_action(Request $request){



      //
      // foreach($request->id as $id){
      //
      //  $data=[
      //
      //
      //   "attentdance"=>$request->attentdance[$id],
      //   "att_date"=>$request->att_date,
      //   "att_year"=>$request->att_year,
      //   "att_year"=>$request->att_month,
      //


//        ];
//
//        $attendan = Attentdance::where(['att_date'=>$data['att_date'],'id'=>$id)->first();
//
//        $attendan->update($data);
//
//       }
//
//
//  return redirect('/all_attentdance')->with('flash_message_error','update  Successfully');
//
//
//
//
//
// }


//delete attendance


public function deleteattendance($att_date){

$past_date = Attentdance::where(['att_date'=>$att_date])->delete();
return redirect('/all_attentdance')->with('flash_message_error','Addendance Delate Successfully');

}







}
