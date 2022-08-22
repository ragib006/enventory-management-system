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

class ProductController extends Controller
{


public function add_product_page_show(){

  // $categories =Category::where(['cat_status'=>1,'parent_id'=>0])->get();
  // $categories_dropdown ="<option selected disbled>Select<option/>";
  //    foreach($categories as $cat){
  //      $categories_dropdown.="<option value='".$cat->id."'>".$cat->cat_name."</option>";
  //       $sub_categories = Category::where(['parent_id'=>$cat->id,'cat_status'=>1])->get();
  //       foreach($sub_categories as $sub_cat){
  //
  //   $categories_dropdown .="<option value = '".$sub_cat->id."'>&nbsp;--&nbsp;".$sub_cat->cat_name."</option>";
  //
  //       }
  //
  //    }

$category_dropdown = Category::with('sub_categories')->where(['parent_id'=>0])->get();

//return $category_dropdown;
  //echo "<pre>";
 //print_r($category_dropdown);

$slipper_dropdown = Slipper::where(['status'=>1])->get();

  $all_product = Product::with('category_name','slipper_name')->get();
 //return $all_product;

 return view('admin.product.add_product')->with(compact('all_product','category_dropdown','slipper_dropdown'));


}


//add product form action

public function addproduct_formaction(Request $request){

  if($request->isMethod('post')){

  $data = $request->all();


  $product = new Product;
  $product->product_name= $data['product_name'];
  $product->cat_id = $data['cat_id'];
  $product->slipper_id = $data['slipper_id'];
  $product->product_code = $data['product_code'];
  $product->product_quantity = $data['product_quantity'];
  $product->product_buy_date = $data['product_buy_date'];
  $product->product_url = $data['product_url'];
  $product->product_expire_date= $data['product_expire_date'];
  $product->buying_price= $data['buying_price'];
  $product->selling_price= $data['selling_price'];





  if($request->hasFile('product_image')){
    $image = $request->file('product_image');
    $img = time().'.'.$image->getClientOriginalExtension();

    //$filename = rand(111,99999).'.'.$img;


    $large_image_location = public_path('images/product/large/'.$img);

             Image::make($image)->save($large_image_location);


          $product->product_image  = $img;


        }


        $product->save();


return redirect('/add_product')->with('flash_message_error','Product added successfully');


}



}


//active product unactiive



//active category unactive_category_active
public function active_product_unactive($id){

   Product::where(['id'=>$id])->update(['product_status'=>0]);
    return redirect('/add_product')->with('flash_message_error','Active product is now unactive');



}

//unactive category unactive_category_active
public function unactive_product_active($id){

   Product::where(['id'=>$id])->update(['product_status'=>1]);
    return redirect('/add_product')->with('flash_message_error','Unactive prouct is now active');


}

//product delete


public function delete_product($id){

   Product::where(['id'=>$id])->delete();
    return redirect('/add_product')->with('flash_message_error','Product delete successfully');


}

//edit product page show


  public function edit_product_page_show($id){

  $product_placeholder_value = Product::where(['id'=>$id])->first();
  $category_dropdown = Category::with('sub_categories')->where(['parent_id'=>0])->get();

  //return $category_dropdown;
    //echo "<pre>";
   //print_r($category_dropdown);

  $slipper_dropdown = Slipper::where(['status'=>1])->get();
  // echo "hi";
   return view('admin.product.edit_product')->with(compact('product_placeholder_value','category_dropdown','slipper_dropdown'));



  }

//edit product form action


public function edit_product_form_action(Request $request,$id){

  if($request->isMethod('post')){
        $data = $request->all();

        if($request->hasFile('product_image')){

$image = $request->file('product_image');
$img = time().'.'.$image->getClientOriginalExtension();

$large_image_location = public_path('images/product/large/'.$img);


Image::make($image)->save($large_image_location);




}else{


$img = $data['current_image'];


}

Product::where(['id'=>$id])->update(['product_name'=>$data['product_name'],'cat_id'=>$data['cat_id'],'slipper_id'=>$data['slipper_id'],'product_code'=>$data['product_code'],'product_buy_date'=>$data['product_buy_date'],'product_url'=>$data['product_url'],
'product_expire_date'=>$data['product_expire_date'],'product_quantity'=>$data['product_quantity'],'buying_price'=>$data['buying_price'],'selling_price'=>$data['selling_price'],'product_image'=>$img]);

return redirect('/add_product')->with('flash_message_error','Product upadate Successfully');


  }





}














}
