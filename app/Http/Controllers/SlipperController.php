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

use App\Employees;
use App\Costomer;
use App\Slipper;


class SlipperController extends Controller
{

  //add_slipper page show

  public function add_slipper_page_show(){

    $all_slipper = Slipper::get();

  //  echo "<pre>";
  //  print_r($all_slipper);

   return view('admin.slipper.add_slipper')->with(compact('all_slipper'));


  }

//add slipper form action

public function addslipper_formaction(Request $request){

     if($request->isMethod('post')){

     $data = $request->all();

     $slipper = new Slipper;

     $slipper->name=$data['name'];
     $slipper->email=$data['email'];
     $slipper->phone=$data['phone'];

     $slipper->address=$data['address'];
     $slipper->type=$data['type'];
     $slipper->shop_name=$data['shop_name'];
     $slipper->bank_name=$data['bank_name'];
     $slipper->account_name=$data['account_name'];
     $slipper->account_number=$data['account_number'];
     $slipper->branch_name=$data['branch_name'];
     $slipper->city=$data['city'];
     if($request->hasFile('photo')){
             $image = $request->file('photo');
             $img = time().'.'.$image->getClientOriginalExtension();

             //$filename = rand(111,99999).'.'.$img;


             $large_image_location = public_path('images/slipper/large/'.$img);

                      Image::make($image)->save($large_image_location);


                   $slipper->photo = $img;


           }


            $slipper->save();
      //sub category er jonno ai parant id ta

   //$section->save();
   return redirect('/add_slipper')->with('flash_message_error','Slipper added successfully');





      }

}

//edit slipper page show

public function edit_slipper_page_show($id){

  $placeholder_value_employees = Slipper::where(['id'=>$id])->first();

    //  echo "<pre>";
    // print_r($placeholder_value_employees);

  return view('admin.slipper.edit_slipper')->with(compact('placeholder_value_employees'));


}



public function edit_slipper_form_action(Request $request,$id){

  if($request->isMethod('post')){
        $data = $request->all();

        if($request->hasFile('photo')){

$image = $request->file('photo');
$img = time().'.'.$image->getClientOriginalExtension();

$large_image_location = public_path('images/slipper/large/'.$img);


Image::make($image)->save($large_image_location);




}else{


$img = $data['current_image'];


}

Slipper::where(['id'=>$id])->update(['name'=>$data['name'],'address'=>$data['address'],'phone'=>$data['phone'],'email'=>$data['email'],'shop_name'=>$data['shop_name'],'account_name'=>$data['account_name'],
'account_number'=>$data['account_number'],'type'=>$data['type'],'bank_name'=>$data['bank_name'],'branch_name'=>$data['branch_name'],'city'=>$data['city'],'photo'=>$img]);

return redirect('/add_slipper')->with('flash_message_error','Slipper upadate Successfully');


  }


}

//active customer unactive

public function activeslipper_unactive($id){


Slipper::where(['id'=>$id])->update(['status'=> 0]);
 return redirect('/add_slipper')->with('flash_message_error','Active slipper unactive');

  }

  //unactive customer active

  public function unactiveslipper_active($id){


  Slipper::where(['id'=>$id])->update(['status'=> 1]);
   return redirect('/add_slipper')->with('flash_message_error','Unactive slipper active');

    }

//slipper delate
public function deleteslipper($id){   

Slipper::where(['id'=>$id])->delete();
 return redirect('/add_slipper')->with('flash_message_error','Slipper delate successfully');






}




}
