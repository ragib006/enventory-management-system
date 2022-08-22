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

use App\Student;

class FrontendController extends Controller
{

  public function homepageshow(){


$all_student = Student::get();
   return view('frontend.homepage')->with(compact('all_student'));


  }

  //add student form action

  public function addstudent_formaction(Request $request){

    if($request->isMethod('post')){

    $data = $request->all();


    $students = new Student;
    $students->student_name= $data['student_name'];
    $students->student_id= $data['student_id'];
    $students->student_department= $data['student_department'];

    if($request->hasFile('student_photo')){
            $image = $request->file('student_photo');
            $img = time().'.'.$image->getClientOriginalExtension();

            //$filename = rand(111,99999).'.'.$img;


            $large_image_location = public_path('images/student/large/'.$img);

                     Image::make($image)->save($large_image_location);


                  $students->student_photo = $img;


          }


           $students->save();
     //sub category er jonno ai parant id ta

  //$section->save();
  return redirect('/')->with('flash_message_error','Student added successfully');


  }


  }

//active student unactive

public function activestudent_unactive($id){


 Student::where(['id'=>$id])->update(['status'=> 0]);
 return redirect('/')->with('flash_message_error','Active student is now unactive');


}
//unactive student active
public function unactivestudent_active($id){

 Student::where(['id'=>$id])->update(['status'=> 1]);
 return redirect('/')->with('flash_message_error','Unactive student is now active');

}
//student edit page show

public function student_edit_pageshow($id){

$placeholder_value_student = Student::where(['id'=>$id])->first();

 return view('edit_student')->with(compact('placeholder_value_student'));

}

//edit student forn action




public function edit_student_form_action(Request $request,$id){

  if($request->isMethod('post')){
        $data = $request->all();

        if($request->hasFile('student_photo')){

$image = $request->file('student_photo');
$img = time().'.'.$image->getClientOriginalExtension();

$large_image_location = public_path('images/student/large/'.$img);


Image::make($image)->save($large_image_location);




}else{


$img = $data['current_image'];


}

Student::where(['id'=>$id])->update(['student_name'=>$data['student_name'],'student_id'=>$data['student_id'],'student_department'=>$data['student_department'],
'student_photo'=>$img]);

return redirect('/')->with('flash_message_error','Student information upadate Successfully');


  }


}

//student delate

public function student_delate($id){


Student::where(['id'=>$id])->delete();

return redirect('/')->with('flash_message_error','Student delate Successfully');

}






}
