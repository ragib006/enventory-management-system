<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/','FrontendController@homepageshow');

Route::post('/add_student_form_action_route','FrontendController@addstudent_formaction');

//active employees unactive
Route::get('/active_student_unactive/{id}','FrontendController@activestudent_unactive');

//unactive employees active
Route::get('/unactive_student_active/{id}','FrontendController@unactivestudent_active');
//EDIT HOME PAGE SHOW
Route::get('/student_edit_route/{id}','FrontendController@student_edit_pageshow');
//delate route
Route::post('/student_edit_form_action_route/{id}','FrontendController@edit_student_form_action');
//student_delate_route
Route::post('/student_delate_route/{id}','FrontendController@student_delate');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//admin login page shoe
Route::get('/admin','AdminController@login_page_show');

//admin login form action
Route::post('/adminlogin_form_action','AdminController@adminlogin_formaction');
//admin dashboard page show




Route::group(['middleware'=>['auth']],function(){
//admin dashboard show
Route::get('/admin_dashboard','AdminController@admindashboard_show');

//admin password change page show
Route::get('/admin_password_change_page_show','AdminController@adminpassword_change_pageshow');
//admin password change form action
Route::post('/admin_password_change_form_action_route','AdminController@adminpassword_change_formaction');
//admin logout
Route::get('/admin_logout','AdminController@adminlogout');
//admin login page shoe
Route::get('/add_employees','EmployessController@add_employees_page_show');

//add employees form action
Route::post('/add_employees_form_action_route','EmployessController@addemployees_formaction');

//delete Employees
Route::get('/employees_delate_route/{id}','EmployessController@deleteemployees');

//active employees unactive
Route::get('/active_employees_unactive/{id}','EmployessController@activeemployees_unactive');

//unactive employees active
Route::get('/unactive_employees_active/{id}','EmployessController@unactiveemployees_active');
//edit employees page show
Route::get('/employees_edit_route/{id}','EmployessController@edit_employees_page_show');
//employee view route
Route::get('/employees_view_route/{id}','EmployessController@view_employees_page_show');
//edit employees form action
Route::post('/employees_edit_form_action_route/{id}','EmployessController@edit_employess_form_action');


//add customer page show
Route::get('/add_customer','CustomerController@add_customer_page_show');
//add customer form aaction
Route::post('/add_customer_form_action_route','CustomerController@addcustomer_formaction');
//customer delete route
Route::get('/customer_delate_route/{id}','CustomerController@delete_customer');
//customer edit page show
Route::get('/customer_edit_route/{id}','CustomerController@edit_customer_page_show');
//customer edit form action route
Route::post('/customer_edit_form_action_route/{id}','CustomerController@edit_customer_form_action');
//active customer unactive
Route::get('/active_customer_unactive/{id}','CustomerController@activecustomer_unactive');

//unactive customer active
Route::get('/unactive_customer_active/{id}','CustomerController@unactivecustomer_active');



//add slipper page show
Route::get('/add_slipper','SlipperController@add_slipper_page_show');
//add customer form aaction
Route::post('/add_slipper_form_action_route','SlipperController@addslipper_formaction');
//edit slipper page show
Route::get('/slipper_edit_route/{id}','SlipperController@edit_slipper_page_show');
//slipper edit forn action
Route::post('/slipper_edit_form_action_route/{id}','SlipperController@edit_slipper_form_action');
//active customer unactive
Route::get('/active_slipper_unactive/{id}','SlipperController@activeslipper_unactive');

//unactive customer active
Route::get('/unactive_slipper_active/{id}','SlipperController@unactiveslipper_active');
//slipper delate
Route::get('/slipper_delate_route/{id}','SlipperController@deleteslipper');


//add employees advaced slary  page show
Route::get('/add_advancedemployees_salary','SalaryController@add_advancedemployees_salary_page_show');
//advanced salary form action
Route::post('/add_advanced_salary_form_action_route','SalaryController@add_advancedsalary_formaction');
//edit salary page show
Route::get('/edit_salary_route/{id}','SalaryController@edit_slary_page_show');
//advanced salary edit form action
Route::post('/advanced_salary_edit_form_action_route/{id}','SalaryController@edit_advanced_salary_form_action');

//active avvanced salary unactive
Route::get('/active_advancrd_salary_unactive/{id}','SalaryController@active_advanced_salary_unactive');

//unactive customer active
Route::get('/unactive_advancrd_salary_active/{id}','SalaryController@unactive_advanced_salary_active');
//slipper delate
Route::get('/advanced_salary_delate_route/{id}','SalaryController@delete_advanced_salary');







//add employees payslary  page show
Route::get('/pay_salary','PaysalaryController@pay_salary_page_show');
//advanced salary form action
Route::post('/pay_salary_form_action_route','PaysalaryController@paysalary_formaction');
//edit salary page show
Route::get('/edit_pay_salary_route/{id}','PaysalaryController@edit_pay_salaryslary_page_show');
//advanced salary edit form action
Route::post('/pay_salary_edit_form_action_route/{id}','PaysalaryController@edit_pay_salary_form_action');

//active avvanced salary unactive
Route::get('/active_pay_salary_unactive/{id}','PaysalaryController@active_pay_salary_unactive');

//unactive customer active
Route::get('/unactive_pay_salary_active/{id}','PaysalaryController@unactive_pay_salary_active');
//slipper delate
Route::get('/pay_salary_delate_route/{id}','PaysalaryController@delete_pay_salary');







//add category

Route::get('/add_category','CategoryController@add_category_page_show');

//add category form action
Route::post('/add_category_form_action_route','CategoryController@addcategory_formaction');

//active category unactive_employees_active

Route::get('/active_category_unactive/{id}','CategoryController@active_category_unactive');

//unactive category active
Route::get('/unactive_category_active/{id}','CategoryController@unactive_category_active');
//category delate
Route::get('/category_delate_route/{id}','CategoryController@delete_category');
//edit ctegory pge show

Route::get('/edit_category_page_show/{id}','CategoryController@edit_category_page_show');


//category edit form ction
Route::post('/category_edit_form_action_route/{id}','CategoryController@edit_category_form_action');











//add product

Route::get('/add_product','ProductController@add_product_page_show');

//add  product form action
Route::post('/add_product_form_action_route','ProductController@addproduct_formaction');

//active product unactive_employees_active

Route::get('/active_product_unactive/{id}','ProductController@active_product_unactive');

//unactive product active
Route::get('/unactive_product_active/{id}','ProductController@unactive_product_active');

//product delate
Route::get('/product_delate_route/{id}','ProductController@delete_product');
//edit product pge show

Route::get('/product_edit_route/{id}','ProductController@edit_product_page_show');


//product edit form ction
Route::post('/product_edit_form_action_route/{id}','ProductController@edit_product_form_action');






//add expand page show

Route::get('/add_expand','ExpendController@add_expand_page_show');

//add expand form action route

Route::post('/add_expand_form_action_route','ExpendController@addexpand_formaction');

//today expand page show

Route::get('/today_expand','ExpendController@todayexpand_page_show');

//edit to day expend

Route::get('/edit_todayexpand_route/{id}','ExpendController@edit_todayexpand_page_show');

//edit today expand expand form action
Route::post('/expand_todayedit_form_action_route/{id}','ExpendController@edit_todayexpand_form_action');

//today expand delate route

Route::get('/today_expand_delate_route/{id}','ExpendController@today_expand_delete');



//show monthly expand pahe

Route::get('/monthly_expand','ExpendController@monthlyexpand_page_show');

//edit monthly expend page show

Route::get('/edit_monthlyexpand_route/{id}','ExpendController@edit_monthlyexpand_page_show');

//edit monthly expand formaction

Route::post('/expand_monthlyedit_form_action_route/{id}','ExpendController@edit_monthlyexpand_form_action');

//monthly expand delete route

Route::get('/monthly_expand_delate_route/{id}','ExpendController@monthly_expand_delete');


//show yearly expand pahe

Route::get('/yearly_expand','ExpendController@yearlyexpand_page_show');

//edit yearly expend page show

Route::get('/edit_yearlyexpand_route/{id}','ExpendController@edit_yearlyexpand_page_show');


//edit monthly expand formaction

Route::post('/expand_yearlyedit_form_action_route/{id}','ExpendController@edit_yearlyexpand_form_action');

//monthly expand delete route

Route::get('/yearly_expand_delate_route/{id}','ExpendController@yearly_expand_delete');


Route::get('/jan_expand','ExpendController@jan_expand_page_show');
Route::get('/jan_expand_delate_route/{id}','ExpendController@jan_expand_delete');

Route::get('/feb_expand','ExpendController@feb_expand_page_show');
Route::get('/feb_expand_delate_route/{id}','ExpendController@feb_expand_delete');

Route::get('/mar_expand','ExpendController@mar_expand_page_show');
Route::get('/mar_expand_delate_route/{id}','ExpendController@mar_expand_delete');

Route::get('/april_expand','ExpendController@april_expand_page_show');
Route::get('/april_expand_delate_route/{id}','ExpendController@april_expand_delete');

Route::get('/may_expand','ExpendController@may_expand_page_show');
Route::get('/may_expand_delate_route/{id}','ExpendController@may_expand_delete');

Route::get('/june_expand','ExpendController@june_expand_page_show');
Route::get('/june_expand_delate_route/{id}','ExpendController@june_expand_delete');

Route::get('/july_expand','ExpendController@july_expand_page_show');
Route::get('/july_expand_delate_route/{id}','ExpendController@july_expand_delete');

Route::get('/aug_expand','ExpendController@aug_expand_page_show');
Route::get('/aug_expand_delate_route/{id}','ExpendController@aug_expand_delete');

Route::get('/sep_expand','ExpendController@sep_expand_page_show');
Route::get('/sep_expand_delate_route/{id}','ExpendController@sep_expand_delete');

Route::get('/oct_expand','ExpendController@oct_expand_page_show');
Route::get('/oct_expand_delate_route/{id}','ExpendController@oct_expand_delete');

Route::get('/nov_expand','ExpendController@nov_expand_page_show');
Route::get('/nov_expand_delate_route/{id}','ExpendController@nov_expand_delete');

Route::get('/dec_expand','ExpendController@dec_expand_page_show');
Route::get('/dec_expand_delate_route/{id}','ExpendController@dec_expand_delete');





//Attendance route


Route::get('/today_attentdance','AttentdanceController@today_attentdance_page_show');
//today addentdance form action

Route::post('/today_attentdence_form_action_route','AttentdanceController@today_attentdance_form_action');


//all attendance page show
Route::get('/all_attentdance','AttentdanceController@all_attentdance_page_show');

//view attendance
Route::get('/view_attendance/{att_date}','AttentdanceController@view_attendance_page_show');

//edit attendance
Route::get('/edit_attendance/{att_date}','AttentdanceController@edit_attendance_page_show');

//edit attendance form action

Route::post('/edit_attentdence_form_action_route','AttentdanceController@edit_attentdance_form_action');

//delete attentandence

Route::get('/delete_attendance/{att_date}','AttentdanceController@deleteattendance');














//edit expand page show

Route::get('/edit_expand_route/{id}','ExpendController@edit_expand_page_show');

//edit expnd forn action
Route::post('/expand_edit_form_action_route/{id}','ExpendController@edit_expand_form_action');

//expand delate route
Route::get('/expand_delate_route/{id}','ExpendController@expand_delete');






//company setting information

Route::get('/setting','SettingController@allcompany_information');

//setting edit route
Route::get('/setting_edit_route/{id}','SettingController@setting_edit_page_show');

//company edit form action
Route::post('/company_edit_form_action_route/{id}','SettingController@setting_edit_formaction');

//company information delate
Route::get('/setting_delate_route/{id}','SettingController@company_information_delate');





//company information form aaction route
Route::post('/company_information_form_action_route','SettingController@company_information_formaction');

//pos route
Route::get('/pos','PosController@pose_page_show');

//pos add category form action

Route::post('/posadd_customer_form_action_route','PosController@pos_addcustomer_formaction');








//product add to cart route
Route::post('/add_to_cart_product','PosController@product_add_to_cart');

//Product quantity update
Route::post('/product_quantity_update/{rowId}','PosController@productquantity_update');

//product delate add to cart

Route::get('/cart_product_delate/{rowId}','PosController@productdelate_addto_cart');




//create invoice form action

Route::post('/create_invoice_form_action','PosController@createinvoiceformaction');

//invoice page show
//
// Route::get('/invoice_page_show','PosController@invoicepage_show');

//order form action

Route::post('/order_form_action_route','OrderController@orderformaction');

//show all order

Route::get('/all_order','OrderController@allorder');

//delate order
Route::get('/order_delate/{id}','OrderController@orderdelate');


//view order
//view_order_details
Route::get('/view_order_details/{id}','OrderController@view_orderdetails');

//order accpet in view arder page

Route::get('/order_approve/{id}','OrderController@orderapprove');



//show all pending order
Route::get('/show_pending_order','OrderController@showallpending_order');



//view pending order and approve
Route::get('/view_pending_order_details/{id}','OrderController@view_pending_orderdetails');

//pending order approve


Route::get('/pending_order_approve/{id}','OrderController@pendingorder_approve');

//pending order delate
Route::get('/pending_order_delate/{id}','OrderController@pending_orderdelate');


});
