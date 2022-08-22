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
use App\Setting;

class SettingController extends Controller
{






  //all company information


  public function allcompany_information(){


   $all_information = Setting::get();

   return view('admin.setting.company_information')->with(compact('all_information'));



  }

  //add company information form action

  public function company_information_formaction(Request $request){

    if($request->isMethod('post')){

    $data = $request->all();


    $product = new Setting;
    $product->company_name= $data['company_name'];
    $product->company_address = $data['company_address'];
    $product->company_email = $data['company_email'];
    $product->company_phone = $data['company_phone'];






    if($request->hasFile('company_logo')){
      $image = $request->file('company_logo');
      $img = time().'.'.$image->getClientOriginalExtension();

      //$filename = rand(111,99999).'.'.$img;


      $large_image_location = public_path('images/setting/large/'.$img);

               Image::make($image)->save($large_image_location);


            $product->company_logo  = $img;


          }


          $product->save();


  return redirect('/setting')->with('flash_message_error','company information added successfully');


  }


  }



//setting edit page show


public function setting_edit_page_show($id){

  $setting_placeholder_value = Setting::where(['id'=>$id])->first();

  return view('admin.setting.edit_setting')->with(compact('setting_placeholder_value'));


}

//setting edit form action


public function setting_edit_formaction(Request $request,$id){


  if($request->isMethod('post')){
        $data = $request->all();

        if($request->hasFile('company_logo')){

$image = $request->file('company_logo');
$img = time().'.'.$image->getClientOriginalExtension();

$large_image_location = public_path('images/setting/large/'.$img);


Image::make($image)->save($large_image_location);




}else{


$img = $data['current_image'];


}
Setting::where(['id'=>$id])->update(['company_name'=>$data['company_name'],'company_address'=>$data['company_address'],'company_email'=>$data['company_email'],'company_phone'=>$data['company_phone'],'company_logo'=>$img]);

return redirect('/setting')->with('flash_message_error','Company information upadate Successfully');


  }



}



//company information delate


public function company_information_delate($id){



Setting::where(['id'=>$id])->delete();
return redirect('/setting')->with('flash_message_error','Company information delete Successfully');


}










}
