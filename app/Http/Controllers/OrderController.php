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
use App\Order;
use App\Orderdetails;
use Cart;


class OrderController extends Controller
{

  public function orderformaction(Request $request){

  $data = array();
  $data['customer_id'] = $request->customer_id;
  $data['order_date'] = $request->order_date;
  $data['order_status'] = $request->order_status;
  $data['total_products'] = $request->total_products;
  $data['sub_total'] = $request->sub_total;
  $data['vat'] = $request->vat;
  $data['total'] = $request->total;
  $data['payment_status'] = $request->payment_status;
  $data['pay'] = $request->pay;
  $data['due'] = $request->due;

  $order_id = DB::table('orders')->insertGetId($data);

  $contents = Cart::content();

  $odata = array();
  foreach($contents as $content){

   $odata['order_id'] = $order_id;
   $odata['product_id'] = $content->id;
   $odata['quantity'] = $content->qty;
   $odata['unitcost'] = $content->price;
   $odata['total_order'] = $content->total;


   $insert = DB::table('orderdetails')->insert($odata);



 }

 Cart::destroy();
  return redirect('/pos');

}



//show all order

public function allorder(){


 $all_order = Order::with('onecustomeroneorder')->get();



return view('admin.order.all_order')->with(compact('all_order'));

}


//delate order


public function orderdelate($id){


Order::where(['id'=>$id])->delete();

return redirect('/pending_order')->with('flash_message_error','Order delate successfully');

}





















//view all order



 public function view_orderdetails($id){




 $order = Order::with('onecustomeroneorder')->where(['id'=>$id])->first();

 // echo "<pre>";
 // print_r($order);

$order_product = DB::table('orderdetails')->join('products','orderdetails.product_id','products.id')->where('order_id',$id)->get();


    //$order_product = Orderdetails::with('orderproduct')->get();

  // echo "<pre>";
   //print_r($order_product);
 // return $order_product;
 // //return $order_product;


  //echo "hi";


 return view('admin.order.view_order')->with(compact('order','order_product'));

 }



//order approve


public function orderapprove($id){


$approveorder = Order::where(['id'=>$id])->update(['order_status'=>'Approve']);

  return redirect('/all_order')->with('flash_message_error','Successfully Order Confirmed');


}



//show all pending order


public function showallpending_order(){


 $all_pending_order = Order::with('onecustomeroneorder')->where(['order_status'=>'pending'])->get();

  //return $all_pending_order;


 return view('admin.order.all_pending_order')->with(compact('all_pending_order'));

}

//view pending order details


public function view_pending_orderdetails($id){




   $order = Order::with('onecustomeroneorder')->where(['id'=>$id])->first();

   // echo "<pre>";
   // print_r($order);

  $order_product = DB::table('orderdetails')->join('products','orderdetails.product_id','products.id')->where('order_id',$id)->get();


      //$order_product = Orderdetails::with('orderproduct')->get();

    // echo "<pre>";
     //print_r($order_product);
   //return $order;
   //return $order_product;


    //echo "hi";


   return view('admin.order.pending_order_view')->with(compact('order','order_product'));




}

//pending order approve

public function pendingorder_approve($id){


   $approveorder = Order::where(['id'=>$id])->update(['order_status'=>'Approve']);

  return redirect('/show_pending_order')->with('flash_message_error','Successfully Order Confirmed');



}

//pending order delate



public function pending_orderdelate($id){


   Order::where(['id'=>$id])->delete();

  return redirect('/show_pending_order')->with('flash_message_error','Successfully Delate Successfully');



}


}
