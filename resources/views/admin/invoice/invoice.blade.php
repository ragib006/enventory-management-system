
@extends('admin_layout.admin_design')

@section('change')


<div class="rag" style="margin-left:270px;margin-top:10px;">

  <div class="invoice p-3 mb-3">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h4>
          <i class="fas fa-globe"></i> AdminLTE, Inc.
          <small class="float-right">Date: {{date('d-m-y')}}</small>
        </h4>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->




    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
          @foreach($company_information as $v_my)
        <address>

          <strong>Company Name : {{$v_my->company_name}}</strong><br>
           Address : {{$v_my->company_address}}<br>
           Email : {{$v_my->company_email}}<br>
          Phone: {{$v_my->company_phone}}<br>



        </address>
          @endforeach
      </div>
      <!-- /.col -->





      <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong>Name : {{$customer_information->name}}</strong><br>
           Address : {{$customer_information->address}}  <br>
           City : {{$customer_information->city}}  <br>
           Email : {{$customer_information->email}} <br>
          Phone: {{$customer_information->phone}}<br>

        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <!-- <b>Invoice #007612</b><br>
        <br>
        <b>Order ID:</b> 4F3S8J<br>
        <b>Payment Due:</b> 2/22/2014<br>
        <b>Account:</b> 968-34567 -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->



<?php

$sl = 1;

?>

  <?php  $add_to_cart_product = Cart::content(); ?>

    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>SL</th>
            <th>Product Name</th>
            <th>Product Quantity</th>
            <th>Product Price</th>

            <th>Total</th>
          </tr>
          </thead>
          <tbody>


    @foreach($add_to_cart_product as $v_show)

          <tr>
            <td>{{$sl++}}</td>
            <td>{{$v_show->name}}</td>
            <td>{{$v_show->qty}}</td>

            <td>{{$v_show->price}} TK</td>

            <td>{{$v_show->price*$v_show->qty}} TK</td>
          </tr>

    @endforeach


          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
        <!-- <p class="lead">Payment Methods:</p>
        <img src="{{asset('backend')}}/dist/img/credit/visa.png" alt="Visa">
        <img src="{{asset('backend')}}/dist/img/credit/mastercard.png" alt="Mastercard">
        <img src="{{asset('backend')}}/dist/img/credit/american-express.png" alt="American Express">
        <img src="{{asset('backend')}}/dist/img/credit/paypal2.png" alt="Paypal">

        <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">

        </p> -->
      </div>
      <!-- /.col -->
      <div class="col-6">


        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Subtotal:</th>
              <td>{{Cart::subtotal()}} TK</td>
            </tr>
            <tr>
              <th>Tax (1%)</th>
              <td>{{Cart::tax()}} TK</td>
            </tr>

            <tr>
              <th>Total:</th>
              <td>{{Cart::total()}} TK</td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- this row will not appear when printing -->
    <div class="row no-print">
      <div class="col-12">
        <a onclick="window.print()" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>


        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModa" style="margin-left:990px;">
          Order
        </button>


        <div class="modal fade" id="exampleModa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content" style="width:550px;">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Order For : {{$customer_information->name}} <span style="margin-left:30px;font-weight:bold;"> Total : {{Cart::total()}} TK</span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">


<form role="form" method="post" action="{{url('/order_form_action_route')}}">
              {{ csrf_field() }}



<div class="form-group">
   <label for="exampleFormControlSelect1">Payment</label>
      <select class="form-control" id="exampleFormControlSelect1" required name="payment_status" style="width:500px;">
        <option value="">Select</option>
        <option value="handcash">Hand cash</option>
        <option value="check">Check</option>
        <option value="check">Due</option>
      </select>
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Pay</label>
    <input style="width:500px;" type="number" name="pay" class="form-control" id="exampleInputEmail1" placeholder="Enter employees Vacation" required>
</div>

<div class="form-group">
    <label for="exampleInputEmail1">Due</label>
    <input style="width:500px;" type="number" name="due" class="form-control" id="exampleInputEmail1" placeholder="Enter employees  City" required>
</div>

      <input style="width:500px;" type="hidden" name="customer_id" value="{{$customer_information->id}}">
      <input style="width:500px;" type="hidden" name="order_date" value="{{date('d-m-y')}}">
      <input style="width:500px;" type="hidden" name="order_status" value="pending">
      <input style="width:500px;" type="hidden" name="total_products" value="{{Cart::count()}}">
      <input style="width:500px;" type="hidden" name="sub_total" value="{{Cart::subtotal()}}">
      <input style="width:500px;" type="hidden" name="vat" value="{{Cart::tax()}}">
      <input style="width:500px;" type="hidden" name="total" value="{{Cart::total()}}">



<div class="modal-footer">
<button type="submit" class="btn btn-primary">Done</button>
</div>
</form>

            </div>
          </div>
        </div>

       </div>










      </div>
    </div>
  </div>














</div>


@endsection
