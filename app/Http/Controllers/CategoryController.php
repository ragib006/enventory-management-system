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


class CategoryController extends Controller
{



//category page show
  public function add_category_page_show(){

//show all category
 $show_all_category = Category::with('patent_category')->get();

 $show_main_category_dropdown = Category::where(['parent_id'=>0])->get();
//  echo "<pre>";
// print_r($show_all_category);

  return view('admin.category.add_category')->with(compact('show_all_category','show_main_category_dropdown'));

 }

//add category form action

public function addcategory_formaction(Request $request){

    if($request->isMethod('post')){

    $data = $request->all();

    $category = new Category;

    $category->cat_name = $data['cat_name'];
    $category->parent_id = $data['parent_id'];
    $category->cat_url = $data['cat_url'];
    $category->cat_description = $data['cat_description'];


    }

   $category->save();

   return redirect('/add_category')->with('flash_message_error','Category added successfully');


}

//active category unactive_category_active
public function active_category_unactive($id){

   Category::where(['id'=>$id])->update(['cat_status'=>0]);
    return redirect('/add_category')->with('flash_message_error','Active Category is now unactive');



}

//unactive category unactive_category_active
public function unactive_category_active($id){

   Category::where(['id'=>$id])->update(['cat_status'=>1]);
    return redirect('/add_category')->with('flash_message_error','Unactive category is now active');


}

//category delte


public function delete_category($id){

   Category::where(['id'=>$id])->delete();
    return redirect('/add_category')->with('flash_message_error','Category delete successfully');


}


//edit category page show

public function edit_category_page_show($id){

//echo "hi";
 //return view('admin.category.edit_category');
   $category_placeholder_value = Category::where(['id'=>$id])->first();

   $show_main_category_dropdown = Category::get();


  return view('admin.category.edit_category')->with(compact('category_placeholder_value','show_main_category_dropdown'));

}

//edit category form action



public function edit_category_form_action(Request $request,$id){

  if($request->isMethod('post')){

     $data=$request->all();

   Category::where(['id'=>$id])->update(['cat_name'=>$data['cat_name'],'parent_id'=>$data['parent_id'],'cat_url'=>$data['cat_url'],'cat_description'=>$data['cat_description']]);

  }

  return redirect('/add_category')->with('flash_message_error','Category update successfully');


}






}
