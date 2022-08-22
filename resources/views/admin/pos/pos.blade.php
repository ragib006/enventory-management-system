@extends('admin_layout.admin_design')

@section('change')



 <div class="card card-primary" style="width:1250px;margin-left:260px;margin-bottom:260px;margin-top:20px;">
    <div class="card-header">
      <h3 class="card-title">Point Of sells</h3>
    </div>
  <div class="row">
  <div class="col-lg-6">


<!--

  <form enctype="multipart/form-data" role="form" method="post" action="{{url('/create_invoice_form_action')}}">
                                {{ csrf_field() }}
  <div class="add_customer">


     <div class="cus" style="width:200px;float:left;margin-bottom:50px;">
     <div class="form-group">
       <select class="form-control"   name="cus_id" style="width:200px;margin-top:10px;margin-left:10px;" required />
        <option value="">Select Customer</option>
         @foreach($all_customer as $v_show)
         <option  value="{{$v_show->id}}">{{$v_show->name}}</option>
         @endforeach
        </select>
      </div>
    </div>






     <div class="but" style="float:left;">
       <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal" style="margin-left:70px;margin-top:15px;">
       Add Customer
       </button>
     </div>
 -->






<?php
 $all_product_cart = Cart::content();

?>
 <div class="card card-primary card-outline" style="width:600px;margin-left:12px;margin-top:70px;">
    <div class="card-body box-profile" style="">
       <table  class="table">
          <thead>
             <tr>
               <th style="text-align:center;">Name</th>
               <th style="text-align:center;">Qty</th>
               <th style="text-align:center;">Price</th>
               <th style="text-align:center;">Total</th>
               <th style="text-align:center;">Action</th>
             </tr>
          </thead>

       <tbody>
      @foreach($all_product_cart as $v_cart_product)
      <tr>
      <td style="text-align:center;">{{$v_cart_product->name}}</td>
      <td>


      <form enctype="multipart/form-data" role="form" method="post" action="{{url('/product_quantity_update/'.$v_cart_product->rowId) }}">
                                        {{ csrf_field() }}
             <input type="number" style="width:50px;" name="qty" value="{{$v_cart_product->qty}}">
             <button type="submit"  class="btn btn-success btn-sm" style="margin-top:-7px;"><i class="fa fa-check"></i></button>

      </form>



      </td>
      <td style="text-align:center;color:blue;">{{$v_cart_product->price}} TK</td>
      <td style="text-align:center;color:blue;font-weight:bold">{{$v_cart_product->price * $v_cart_product->qty}} TK</td>
      <td>
      <center>
        <a class="btn btn-danger btn-sm" style=""  href="{{url('/cart_product_delate/'.$v_cart_product->rowId) }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
      </center>
      </td>
      </tr>
       @endforeach
     </tbody>
   </table>
     </li>
   </ul>
     <div class="dsd" style="">

       <form enctype="multipart/form-data" role="form" method="post" action="{{url('/create_invoice_form_action')}}">
                                     {{ csrf_field() }}
       <div class="add_customer">


          <div class="cus" style="width:200px;float:left;margin-bottom:50px;">
          <div class="form-group">
            <select class="form-control"   name="cus_id" style="width:200px;margin-top:10px;margin-left:10px;" required />
             <option value="">Select Customer</option>
              @foreach($all_customer as $v_show)
              <option  value="{{$v_show->id}}">{{$v_show->name}}</option>
              @endforeach
             </select>
           </div>
         </div>



          <div class="but" style="float:left;">
            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModal" style="margin-left:230px;margin-top:10px;margin-bottom:75px;">
            Add Customer
            </button>
          </div>
          </div>



      <div class="sdf" style="">
       <div class="text-center bg-primary" style="padding-top:20px;padding-bottom:20px;" >

          <h3 class="profile-username text-center" style="font-size:18px;color:white;">Quantity  : {{Cart::count()}}</h3>
          <h3 class="profile-username text-center" style="font-size:18px;color:white;">Subtotal  : {{Cart::subtotal()}} TK</h3>
          <h3 class="profile-username text-center" style="font-size:18px;color:white;">Vat  : {{Cart::tax()}} TK</h3>
         <hr style="background:white;">
         <h3 class="profile-username text-center" style="font-size:20px;color:white;font-weight:bold;margin-bottom:30px;">Total  : {{Cart::total()}} TK</h3>






         <input type="submit" class="btn btn-success" value="Create invoice">
       </div>

   </div>

   </div>
 </div>
</div>

  </form>




               </div>

               <div class="col-lg-6">


                 <div class="card-body" >
                   <table id="section" class="table table-bordered table-striped">
                     <thead>
                     <tr>

                        <th style="text-align:center;">Image</th>
                          <th style="text-align:center;">Category</th>
                        <th style="text-align:center;">Supplyer</th>


                        <th style="text-align:center;">quantity</th>
                            <th style="text-align:center;">Sell</th>
                              <th style="text-align:center;">Add</th>



                     </tr>
                     </thead>


                     <tbody>

                        @foreach($all_product as $v_show)

                     <tr>
        <form enctype="multipart/form-data" role="form" method="post" action="{{url('/add_to_cart_product')}}">
                                              {{ csrf_field() }}



                      <input type="hidden" name="id" value="{{$v_show->id}}">
                      <input type="hidden" name="name" value="{{$v_show->product_name}}">
                      <input type="hidden" name="qty" value="1">
                      <input type="hidden" name="price" value="{{$v_show->selling_price}}">





                       <td>
                         <center>

                         <img src="{{asset('/images/product/large/'.$v_show->product_image)}}" style="width:80px; height:80px;border-radius:2px;" alt="" />
                         </center>
                       </td>

                       <td style="text-align:center;padding-top:35px;">{{$v_show->product_name}}</td>
                       <td style="text-align:center;padding-top:35px;color:blue;">{{$v_show->category_name->cat_name}}</td>

                       <td style="text-align:center;padding-top:35px;">{{$v_show->product_quantity}}</td>
                       <td style="text-align:center;padding-top:35px;">{{$v_show->selling_price }} TK</td>
                       <td style="text-align:center;padding-top:35px;">

                     <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-plus-square"></i></button>

                       </td>






        </form>







                     </tr>
                     @endforeach

                     </tbody>



                   </table>
                 </div>

























               </div>

            </div>






</div>











<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="width:550px;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Emopoyess</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">


<form enctype="multipart/form-data" role="form" method="post" action="{{url('/posadd_customer_form_action_route')}}">
               {{ csrf_field() }}


<div class="form-group">
<label for="exampleInputEmail1">Customer Name</label>
<input style="width:500px;" type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter customer name" required>
</div>

<div class="form-group">
<label for="exampleInputEmail1">Customer Email</label>
<input style="width:500px;" type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter customer email" required>
</div>


<div class="form-group">
<label for="exampleInputEmail1">Customer Phone</label>
<input style="width:500px;" type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Customer phone" required>
</div>

<div class="form-group">
<label for="exampleInputEmail1">Customer Address</label>
<input style="width:500px;" type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter customer address" required>
</div>


<div class="form-group">
<label for="exampleInputEmail1">Customer Shope Name</label>
<input style="width:500px;" type="text" name="shopname" class="form-control" id="exampleInputEmail1" placeholder="Enter customer Shope Name" required>
</div>

<div class="form-group" style="width:500px;">
 <label for="exampleInputFile">Employees Image</label><br>
   <img id="image" style="margin-bottom:10px;" src="#">
 <div class="input-group">
   <div class="custom-file">

     <input type="file" class="custom-file-input"  required  name="photo" accept="image/*" class="upload" required onchange="readURL(this);">
     <label class="custom-file-label" for="exampleInputFile">Choose file</label>
   </div>
   <div class="input-group-append">

   </div>
 </div>
</div>


<div class="form-group">
<label for="exampleInputEmail1">Bank Name</label>
<input style="width:500px;" type="text" name="bank_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Bank Name" required>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Account Name</label>
<input style="width:500px;" type="text" name="account_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Customer Account Name" required>
</div>
<div class="form-group">
<label for="exampleInputEmail1">Account Number</label>
<input style="width:500px;" type="text" name="account_number" class="form-control" id="exampleInputEmail1" placeholder="Enter Customer Account Number" required>
</div>

<div class="form-group">
<label for="exampleInputEmail1">Branch Name</label>
<input style="width:500px;" type="text" name="bank_branch" class="form-control" id="exampleInputEmail1" placeholder="Enter Branch Name" required>
</div>
<div class="form-group">
<label for="exampleInputEmail1">City</label>
<input style="width:500px;" type="text" name="city" class="form-control" id="exampleInputEmail1" placeholder="Enter City" required>
</div>












<div class="modal-footer">
<button type="submit" class="btn btn-primary">Done</button>
</div>
</form>




    </div>
  </div>
</div>

</div>













@endsection
