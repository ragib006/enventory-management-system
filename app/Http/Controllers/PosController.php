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
use App\Category;
use App\Slipper;
use App\Product;
use App\Setting;
use Cart;


class PosController extends Controller
{


//pos page show


public function pose_page_show(){


$all_customer = Costomer::get();

$all_product = Product::with('category_name')->where(['product_status'=>1])->get();

$show_main_category_dropdown = Category::where(['parent_id'=>0,'cat_status'=>1])->get();

//return $show_main_category_dropdown;

   return view('admin.pos.pos')->with(compact('all_product','all_customer','show_main_category_dropdown'));

}


//pos add category form action




public function pos_addcustomer_formaction(Request $request){

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
    return redirect('/pos')->with('flash_message_error','Customer added successfully');



     }


}





//product add to cart


  public function product_add_to_cart(Request $request){


$my_id=$request->id;
$my_product = Product::where(['id'=>$my_id])->first();
$data = array();

$data['id']=$request->id;
$data['name']=$request->name;
$data['qty']=$request->qty;
$data['price']=$request->price;




//return $data;


$add = Cart::add($data);


return redirect('/pos');





     }

//product quantity update


public function productquantity_update(Request $request,$rowId){



 $qty = $request->qty;
 $update = Cart::update($rowId,$qty);


 return redirect('/pos');




}


public function productdelate_addto_cart($rowID){


$remove = Cart::remove($rowID);
 return redirect('/pos');

}








//create invoice form action

public function createinvoiceformaction(Request $request){


$customerid = $request->cus_id;

$customer_information = Costomer::where(['id'=>$customerid])->first();
$add_to_cart_product = Cart::content();

$company_information = setting::get();

//return $customer_information;

  return view('admin.invoice.invoice')->with(compact('customer_information','add_to_cart_product','company_information'));
//
// return $customer;
// return $add_to_cart_product;

}


//invoice page showe

// public function invoicepage_show(){
//   $customerid = $request->cus_id;
//
//   $customer_information = Costomer::where(['id'=>$customerid])->first();
//   $add_to_cart_product = Cart::content();
//
// return view('admin.invoice.invoice')->with(compact('customer_information','add_to_cart_product'));;
//
//
// }
//










}
