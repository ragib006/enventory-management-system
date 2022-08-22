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
use App\Expend;

class ExpendController extends Controller
{



//add expand page show
public function add_expand_page_show(){


$all_expand_data = Expend::get();


  return view('admin.expand.add_expand')->with(compact('all_expand_data'));


}

//add epan form action


public function addexpand_formaction(Request $request){


    if($request->isMethod('post')){

    $data = $request->all();


    $expand = new Expend;
    $expand->expend_amount= $data['expend_amount'];
    $expand->expend_month= $data['expend_month'];
    $expand->expend_date = $data['expend_date'];
    $expand->expend_details = $data['expend_details'];
    $expand->expend_year = $data['expend_year'];

      $expand->save();


  return redirect('/add_expand')->with('flash_message_error','Expand Information added successfully');


  }


}


//today expand page show


public function todayexpand_page_show(){

 $today_date = date("d-m-y");

 $today_expand_information = Expend::where(['expend_date'=>$today_date])->get();

$today_total_amount = Expend::where(['expend_date'=>$today_date])->sum('expend_amount');

   //return $today_total_amount;

   return view('admin.expand.today_expand')->with(compact('today_expand_information','today_total_amount'));



}

//edit today expandroute


public function edit_todayexpand_page_show($id){

$placeholder_value_expand = Expend::where(['id'=>$id])->first();

//return $placeholder_value_expand;
  return view('admin.expand.edit_today_expand')->with(compact('placeholder_value_expand'));

}





//edit today epand form action

public function edit_todayexpand_form_action(Request $request,$id){


  if($request->isMethod('post')){

   $data = $request->all();

     Expend::where(['id'=>$id])->update(['expend_amount'=>$data['expend_amount'],'expend_details'=>$data['expend_details']]);


      return redirect('/today_expand')->with('flash_message_error','Today Expand Information option update successfully');


  }





}


//today expand delate



public function today_expand_delete($id){

Expend::where(['id'=>$id])->delete();
    return redirect('/today_expand')->with('flash_message_error','Today Expand Delate successfully');
}




//monthly expand page show

public function monthlyexpand_page_show(){

$month_date = date("F");

$monthly_expand_information = Expend::where(['expend_month'=>$month_date])->get();


$month_total_amount = Expend::where(['expend_month'=>$month_date])->sum('expend_amount');

  //return $today_total_amount;

  return view('admin.expand.monthly_expand')->with(compact('monthly_expand_information','month_total_amount'));


}

//edit monthly page show

public function edit_monthlyexpand_page_show($id){



  $placeholder_value_expand = Expend::where(['id'=>$id])->first();

  //return $placeholder_value_expand;
    return view('admin.expand.edit_monthly_expand')->with(compact('placeholder_value_expand'));



}

//edit monthly expand form action

public function edit_monthlyexpand_form_action(Request $request,$id){


    if($request->isMethod('post')){

     $data = $request->all();

       Expend::where(['id'=>$id])->update(['expend_amount'=>$data['expend_amount'],'expend_details'=>$data['expend_details']]);


        return redirect('/monthly_expand')->with('flash_message_error','Monthly Expand Information option update successfully');

    }


}

//delete monthly expand

public function monthly_expand_delete($id){


  Expend::where(['id'=>$id])->delete();
      return redirect('/monthly_expand')->with('flash_message_error','Monthly Expand Delate successfully');



        }


//yearly expand page show


public function yearlyexpand_page_show(){

  $year_date = date("Y");

  $yearly_expand_information = Expend::where(['expend_year'=>$year_date])->get();


  $year_total_amount = Expend::where(['expend_year'=>$year_date])->sum('expend_amount');

    //return $today_total_amount;

    return view('admin.expand.yearly_expand')->with(compact('yearly_expand_information','year_total_amount'));


         }

//edit yearly page show


public function edit_yearlyexpand_page_show($id){


  $placeholder_value_expand = Expend::where(['id'=>$id])->first();

  //return $placeholder_value_expand;
    return view('admin.expand.edit_yearly_expand')->with(compact('placeholder_value_expand'));



           }

//edit yearly edit form action




public function edit_yearlyexpand_form_action(Request $request,$id){



      if($request->isMethod('post')){

       $data = $request->all();

         Expend::where(['id'=>$id])->update(['expend_amount'=>$data['expend_amount'],'expend_details'=>$data['expend_details']]);


          return redirect('/yearly_expand')->with('flash_message_error','Yearly Expand Information option update successfully');

               }


           }



//delete monthly expand

public function yearly_expand_delete($id){


  Expend::where(['id'=>$id])->delete();
      return redirect('/yearly_expand')->with('flash_message_error','Yearly Expand Delate successfully');



            }

//january month expand show

public function jan_expand_page_show(){


   $month = "January";
   $year_date = date("Y");


   $yearly_expand_information = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->get();


   $year_total_amount = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->sum('expend_amount');

     //return $today_total_amount;

     return view('admin.expand.jan')->with(compact('yearly_expand_information','year_total_amount'));


          }

public function jan_expand_delete($id){


  Expend::where(['id'=>$id])->delete();
      return redirect('/jan_expand')->with('flash_message_error','January Expand Delate successfully');



          }





//Febuary month expand show

public function feb_expand_page_show(){


   $month = "Febuary";
   $year_date = date("Y");


   $yearly_expand_information = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->get();


   $year_total_amount = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->sum('expend_amount');

     //return $today_total_amount;

     return view('admin.expand.feb')->with(compact('yearly_expand_information','year_total_amount'));


         }




public function feb_expand_delete($id){


  Expend::where(['id'=>$id])->delete();
      return redirect('/feb_expand')->with('flash_message_error','February Expand Delate successfully');



             }








//March month expand show

public function mar_expand_page_show(){


   $month = "March";
   $year_date = date("Y");


   $yearly_expand_information = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->get();


   $year_total_amount = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->sum('expend_amount');

     //return $today_total_amount;

     return view('admin.expand.march')->with(compact('yearly_expand_information','year_total_amount'));


           }

public function mar_expand_delete($id){


  Expend::where(['id'=>$id])->delete();
      return redirect('/mar_expand')->with('flash_message_error','March Expand Delate successfully');


       }





//March month expand show

public function april_expand_page_show(){


   $month = "April";
   $year_date = date("Y");


   $yearly_expand_information = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->get();


   $year_total_amount = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->sum('expend_amount');

     //return $today_total_amount;

     return view('admin.expand.april')->with(compact('yearly_expand_information','year_total_amount'));


          }

public function april_expand_delete($id){


  Expend::where(['id'=>$id])->delete();
      return redirect('/april_expand')->with('flash_message_error','April Expand Delate successfully');


          }





//May month expand show

public function may_expand_page_show(){


   $month = "May";
   $year_date = date("Y");


   $yearly_expand_information = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->get();


   $year_total_amount = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->sum('expend_amount');

     //return $today_total_amount;

     return view('admin.expand.may')->with(compact('yearly_expand_information','year_total_amount'));


             }

public function may_expand_delete($id){


  Expend::where(['id'=>$id])->delete();
      return redirect('/may_expand')->with('flash_message_error','May Expand Delate successfully');


          }




//June month expand show

public function june_expand_page_show(){


   $month = "June";
   $year_date = date("Y");


   $yearly_expand_information = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->get();


   $year_total_amount = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->sum('expend_amount');

     //return $today_total_amount;

     return view('admin.expand.june')->with(compact('yearly_expand_information','year_total_amount'));


             }

public function june_expand_delete($id){


  Expend::where(['id'=>$id])->delete();
      return redirect('/june_expand')->with('flash_message_error','June Expand Delate successfully');


            }

//June month expand show

public function july_expand_page_show(){


   $month = "July";
   $year_date = date("Y");


   $yearly_expand_information = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->get();


   $year_total_amount = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->sum('expend_amount');

     //return $today_total_amount;

     return view('admin.expand.july')->with(compact('yearly_expand_information','year_total_amount'));


             }

public function july_expand_delete($id){


  Expend::where(['id'=>$id])->delete();
      return redirect('/july_expand')->with('flash_message_error','July Expand Delate successfully');


         }


//August month expand show

public function aug_expand_page_show(){


   $month = "August";
   $year_date = date("Y");


  $yearly_expand_information = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->get();


 $year_total_amount = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->sum('expend_amount');

    // return $yearly_expand_information;

   return view('admin.expand.august')->with(compact('yearly_expand_information','year_total_amount'));


        }

public function aug_expand_delete($id){


  Expend::where(['id'=>$id])->delete();
      return redirect('/aug_expand')->with('flash_message_error','August Expand Delate successfully');


       }



//September month expand show

public function sep_expand_page_show(){


   $month = "September";
   $year_date = date("Y");


   $yearly_expand_information = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->get();


   $year_total_amount = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->sum('expend_amount');

    // return $yearly_expand_information;

  return view('admin.expand.sep')->with(compact('yearly_expand_information','year_total_amount'));


                }

public function sep_expand_delete($id){


  Expend::where(['id'=>$id])->delete();
      return redirect('/sep_expand')->with('flash_message_error','September Expand Delate successfully');


}


//October month expand show

public function oct_expand_page_show(){


   $month = "October";
   $year_date = date("Y");


   $yearly_expand_information = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->get();


   $year_total_amount = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->sum('expend_amount');

     //return $today_total_amount;

     return view('admin.expand.oct')->with(compact('yearly_expand_information','year_total_amount'));


}

public function oct_expand_delete($id){


  Expend::where(['id'=>$id])->delete();
      return redirect('/oct_expand')->with('flash_message_error','October Expand Delate successfully');


}


//November month expand show

public function nov_expand_page_show(){


   $month = "November";
   $year_date = date("Y");


   $yearly_expand_information = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->get();


   $year_total_amount = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->sum('expend_amount');

     //return $today_total_amount;

     return view('admin.expand.nov')->with(compact('yearly_expand_information','year_total_amount'));


}

public function nov_expand_delete($id){


  Expend::where(['id'=>$id])->delete();
      return redirect('/nov_expand')->with('flash_message_error','November Expand Delate successfully');


}


//December month expand show

public function dec_expand_page_show(){


   $month = "December";
   $year_date = date("Y");


   $yearly_expand_information = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->get();


   $year_total_amount = Expend::where(['expend_month'=>$month,'expend_year'=>$year_date])->sum('expend_amount');

     //return $today_total_amount;

     return view('admin.expand.dec')->with(compact('yearly_expand_information','year_total_amount'));


}

public function dec_expand_delete($id){


  Expend::where(['id'=>$id])->delete();
      return redirect('/dec_expand')->with('flash_message_error','December Expand Delate successfully');


            }







   }
