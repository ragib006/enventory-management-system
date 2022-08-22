
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

                <div style="float:left;width:450px;">
                <h3 class="card-title"><p style="margin-top:7px;">Monthly Expands : {{$month_total_amount}} TK</p>
               </div>

               <div style="">
                <a href="{{url('/jan_expand')}}" class="btn btn-success">Jan</a>
                <a href="{{url('/feb_expand')}}" class="btn btn-danger">Feb</a>
                <a href="{{url('/mar_expand')}}" class="btn btn-warning">Mar</a>
                <a href="{{url('/april_expand')}}" class="btn btn-info">Apr</a>
                <a href="{{url('/may_expand')}}" class="btn btn-primary">May</a>
                <a href="{{url('/june_expand')}}" class="btn btn-success">June</a>
                <a href="{{url('/july_expand')}}" class="btn btn-danger">July</a>
                <a href="{{url('/aug_expand')}}" class="btn btn-warning">Aug</a>
                <a href="{{url('/sep_expand')}}" class="btn btn-info">Sep</a>
                <a href="{{url('/oct_expand')}}" class="btn btn-primary">Oct</a>
                <a href="{{url('/nov_expand')}}" class="btn btn-success">Nov</a>
                <a href="{{url('/dec_expand')}}" class="btn btn-info">Dec</a>
               </div>


              </div>






              <!-- /.card-header -->
              <div class="card-body" >
                <table id="section" class="table table-bordered table-striped">
                  <thead>
                  <tr>

                     <th style="text-align:center;">Amount</th>
                     <th style="text-align:center;">Date</th>
                     <th style="text-align:center;">Month</th>
                     <th style="text-align:center;">Year</th>
                     <th style="text-align:center;">Action</th>


                  </tr>
                  </thead>


                  <tbody>

                     @foreach($monthly_expand_information as $v_show)

                  <tr>


                    <td style="text-align:center;padding-top:45px;">{{$v_show->expend_amount}} TK</td>
                    <td style="text-align:center;padding-top:45px;">{{$v_show->expend_month}}</td>
                    <td style="text-align:center;padding-top:45px;">{{$v_show->expend_date}}</td>
                    <td style="text-align:center;padding-top:45px;">{{$v_show->expend_year}}</td>



       <td>


<center>

    <a href="#myModal2{{$v_show->id}}" style="margin-top:30px;" data-toggle="modal" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
    <a class="btn btn-warning btn-sm" style="margin-top:30px;"  href="{{URL::to('/edit_monthlyexpand_route/'.$v_show->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
    <a class="btn btn-danger btn-sm" style="margin-top:30px;" id="delate" href="{{URL::to('/monthly_expand_delate_route/'.$v_show->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>

</center>













            <div id="myModal2{{$v_show->id}}" class="modal hide"style="">
              <div style="width:50%;margin-left:30%;margin-top:5%;">
                       <div class="modal-header" style="background:white;">
                         <h2 style="font-weight:bold;">Expend Details</h2>
                         <button data-dismiss="modal" class="close" type="button">×</button>

                       </div>
                       <div class="modal-body" style="background:white;">

                         <span style="font-size:22px;font-weight:bold;color:green;">Name :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->expend_details}}</span><br>

                       </div>
                       <div class="modal-footer"><a data-dismiss="modal" class="btn btn-inverse" href="#">Cancel</a> </div>
                     </div>

                </div>





















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
