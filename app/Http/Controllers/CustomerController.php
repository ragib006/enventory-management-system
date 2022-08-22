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



class CustomerController extends Controller
{


//add customer page show
  public function add_customer_page_show(){


$show_all_customer = Costomer::get();
    return view('admin.customer.add_customer')->with(Compact('show_all_customer'));


}


//add customer form action

public function addcustomer_formaction(Request $request){

     if($request->isMethod('post')){

      $data = $request->all();


      $customer = new Costomer;
      $customer->name= $data['name'];
      $customer->email= $data['email'];
      $customer->phone= $data['phone'];
      $customer->address= $data['address'];
      $customer->shopname = $data['shopname'];
      $customer->account_name= $data['account_name'];
      $customer->account_number= $data['account_number'];
      $customer->bank_name = $data['bank_name'];
      $customer->bank_branch= $data['bank_branch'];
      $customer->city= $data['city'];
      if($request->hasFile('photo')){
              $image = $request->file('photo');
              $img = time().'.'.$image->getClientOriginalExtension();

              //$filename = rand(111,99999).'.'.$img;


              $large_image_location = public_path('images/customer/large/'.$img);

                       Image::make($image)->save($large_image_location);


                    $customer->photo = $img;


            }


             $customer->save();
       //sub category er jonno ai parant id ta

    //$section->save();
    return redirect('/add_customer')->with('flash_message_error','Customer added successfully');



     }


}

//delete customer

public function deletecustomer($id){


  Costomer::where(['id'=>$id])->delete();
 return redirect('/add_customer')->with('flash_message_error','Costomer delate successfully');



}

//edit customer page show


public function edit_customer_page_show($id){


  $placeholder_value_employees =  Costomer::where(['id'=>$id])->first();

//  echo "<pre>";
//  print_r($placeholder_value_employees);
  return view('admin.customer.edit_customer')->with(compact('placeholder_value_employees'));


}

//edit customer form action



public function edit_customer_form_action(Request $request,$id){

  if($request->isMethod('post')){
        $data = $request->all();

        if($request->hasFile('photo')){

$image = $request->file('photo');
$img = time().'.'.$image->getClientOriginalExtension();

$large_image_location = public_path('images/customer/large/'.$img);


Image::make($image)->save($large_image_location);




}else{


$img = $data['current_image'];


}

Costomer::where(['id'=>$id])->update(['name'=>$data['name'],'address'=>$data['address'],'phone'=>$data['phone'],'email'=>$data['email'],'shopname'=>$data['shopname'],'account_name'=>$data['account_name'],
'account_number'=>$data['account_number'],'bank_name'=>$data['bank_name'],'bank_branch'=>$data['bank_branch'],'city'=>$data['city'],'photo'=>$img]);

return redirect('/add_customer')->with('flash_message_error','Customer upadate Successfully');


  }


}

//active customer unactive

public function activecustomer_unactive($id){


Costomer::where(['id'=>$id])->update(['status'=> 0]);
 return redirect('/add_customer')->with('flash_message_error','Active customer unactive');

  }

  //unactive customer active

  public function unactivecustomer_active($id){


  Costomer::where(['id'=>$id])->update(['status'=> 1]);
   return redirect('/add_customer')->with('flash_message_error','Unactive customer active');

    }

//customer delate
public function delete_customer($id){

  Costomer::where(['id'=>$id])->delete();
   return redirect('/add_customer')->with('flash_message_error','Customer delate successfully');




}


}
