
@extends('admin_layout.admin_design')

@section('change')





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
        <!--    <h1>DataTables</h1>-->

        <p class="login-box-msg" style="">


        @if(Session::has('flash_message_error'))


        <div class="alert alert-success alert-error" style="width:400px;">

        <button type="button" class="close" data-dismiss="alert">×</button>

        <strong>{!! session('flash_message_error') !!}</strong>

        </div>

        @endif



        </p>



          </div>

















        </div>
      </div><!-- /.container-fluid -->
    </section>





<!---- add category form a all section show koraci ---  >

<!---- show all category in add category dropdown  ---  >






    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">



            <div class="card">



              <div class="card-header">
                <h3 class="card-title">All Product</h3>




              </div>







              <!-- /.card-header -->
              <div class="card-body" >
                <table id="section" class="table table-bordered table-striped">
                  <thead>
                  <tr>

                     <th style="text-align:center;">Order id</th>
                       <th style="text-align:center;">Customer Name</th>
                     <th style="text-align:center;">Date</th>


                     <th style="text-align:center;">Quantity</th>
                     <th style="text-align:center;width:120px;">Order Status</th>
                     <th style="text-align:center;">Payment Status</th>

                     <th style="text-align:center;">Total</th>




                    <th style="text-align:center;">Action</th>
                  </tr>
                  </thead>


                  <tbody>

                     @foreach($all_pending_order as $v_show)

                  <tr>


                    <td style="text-align:center;padding-top:30px;">{{$v_show->id}}</td>
                    <td style="text-align:center;padding-top:30px;color:blue;">{{$v_show->onecustomeroneorder->name}}</td>
                    <td style="text-align:center;padding-top:30px;">{{$v_show->order_date }}</td>
                    <td style="text-align:center;padding-top:30px;">{{$v_show->total_products }}</td>
                    <td style="text-align:center;padding-top:30px;">

           <span style="display:block;text-align:center;width:80px;margin-left:30px;" class="btn btn-danger btn-sm">{{$v_show->order_status}}</span>







                    </td>
                    <td style="text-align:center;padding-top:30px;">{{$v_show->payment_status }}</td>
                    <td style="text-align:center;padding-top:30px;">{{$v_show->total}} TK</td>










       <td>



<center>

  <a class="btn btn-warning btn-sm" style="margin-top:20px;"  href="{{URL::to('/view_pending_order_details/'.$v_show->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
  <a class="btn btn-danger btn-sm" style="margin-top:20px;" id="delate" href="{{URL::to('/pending_order_delate/'.$v_show->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
</center>




                    </td>
                  </tr>
                  @endforeach

                  </tbody>



                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



































@endsection
