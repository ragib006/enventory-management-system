
@extends('admin_layout.admin_design')

@section('change')


<div class="rag" style="margin-left:270px;margin-top:10px;">

  <div class="invoice p-3 mb-3">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h4>
          <i class="fas fa-globe"></i> Order Id : {{$order->id}}
          <small class="float-right">Date: {{date('d-m-y')}}</small>


        </h4>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
<h4 class=""></h4>

<?php

 $company_information = DB::table('settings')->get();

?>



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
          <strong>Name : {{$order->onecustomeroneorder->name}}</strong><br>
           Address : {{$order->onecustomeroneorder->address}}  <br>
           City : {{$order->onecustomeroneorder->city}}  <br>
           Email : {{$order->onecustomeroneorder->email}} <br>
          Phone : {{$order->onecustomeroneorder->phone}}<br>

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



    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>SL</th>
            <th>Product Name</th>
            <th>Product Code</th>
            <th>Product Quantity</th>
            <th>Product Price</th>

            <th>Total</th>
          </tr>
          </thead>
          <tbody>


<?php

$sl = 1;

?>


    @foreach($order_product as $v_show)

          <tr>
            <td>{{$sl++}}</td>
            <td>{{$v_show->product_name}}</td>
            <td>{{$v_show->product_code}}</td>
            <td>{{$v_show->quantity}}</td>

            <td>{{$v_show->unitcost}} TK</td>

            <td>{{$v_show->total_order}} TK</td>
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
        <div class="scfns" style="margin-left:50px;margin-top:20px;">

          <p style="font-weight:bold;" class="">Order : {{ $order->order_status}}</p>
        <p style="font-weight:bold;"> Paymeny By : {{ $order->payment_status}} TK</p>
        <p style="font-weight:bold;"> Total : {{ $order->total}} TK</p>
        <p style="font-weight:bold;"> Pay : {{ $order->pay}} TK</p>
        <p style="font-weight:bold;"> Due : {{ $order->due}} TK</p>


        </div>

        <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">

        </p>
      </div>
      <!-- /.col -->
      <div class="col-6">


        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Subtotal:</th>
              <td style="font-weight:bold;">{{ $order->sub_total}} TK</td>
            </tr>
            <tr>
              <th>Tax (1%)</th>
              <td style="font-weight:bold;">{{ $order->vat}} TK</td>
            </tr>

            <tr>
              <th>Total:</th>
              <td style="font-weight:bold;">{{ $order->total}} TK</td>
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


        <!-- <a  href="{{url('/order_approve/'.$order->id)}}" type="button" class="btn btn-primary" style="margin-left:990px;">
          Accpet
        </a> -->


        @if($order->order_status=='pending')


         <a  href="{{url('/order_approve/'.$order->id)}}" type="button" class="btn btn-primary" style="margin-left:990px;">
           Accpet </a>

        @else

         <p style="margin-left:900px;color:blue;font-weight:bold;" >This Order Already Approve</p>

        @endif












      </div>
    </div>
  </div>














</div>


@endsection
