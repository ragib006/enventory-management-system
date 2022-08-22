<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Order;
use Session;
session_start();

class AdminController extends Controller
{


//admin login pannel show
public function login_page_show(){

   return view('admin.admin_login');


}


//show admin dashboard

public function admindashboard_show(){

//   $today_date = date('d-m-y');
//
// $today_sells = DB::table('orders')->sum('sub_total');
//
//
//   return $today_sells;



  return view('admin.admin_dash_board');

}




//ADMIN LOGIN FORM ACTION

public function adminlogin_formaction(Request $request){

if($request->isMethod('post')){
              $data = $request->input();
             if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1'])){


                 return redirect('/admin_dashboard');


             } else{

                 return redirect('/admin')->with('flash_message_error','Invalid username or password');



             }





}

}

//admin admin_logout

public function adminlogout(){

  Session::flush();
return redirect('/admin')->with('flash_message_error','Logout successfully');

}

//admin password change page show


public function adminpassword_change_pageshow(){

  return view('admin.admin_password_change');


}
//admin password change form action

public function adminpassword_change_formaction(Request $request){

       if($request->isMethod('post')){

    $data = $request->all();

    // echo "<pre>";
    // print_r($data);

    $password = bcrypt($data['new_password']);

    User::where('id','1')->update(['password'=>$password]);
return redirect('/admin')->with('flash_message_error','Password change successfully');


       }






}




}
