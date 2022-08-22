
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
                <h3 class="card-title">Today Expands Information</h3>
                 <center style="padding:0px;margin:0px;out-line:0px;">

                  <h4>Today Expands : {{$today_total_amount}} TK</h4>

                 </center>

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

                     @foreach($today_expand_information as $v_show)

                  <tr>


                    <td style="text-align:center;padding-top:45px;">{{$v_show->expend_amount}} TK</td>
                    <td style="text-align:center;padding-top:45px;">{{$v_show->expend_month}}</td>
                    <td style="text-align:center;padding-top:45px;">{{$v_show->expend_date}}</td>
                    <td style="text-align:center;padding-top:45px;">{{$v_show->expend_year}}</td>



       <td>


<center>

    <a href="#myModal2{{$v_show->id}}" style="margin-top:30px;" data-toggle="modal" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
  <a class="btn btn-warning btn-sm" style="margin-top:30px;"  href="{{URL::to('/edit_todayexpand_route/'.$v_show->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
  <a class="btn btn-danger btn-sm" style="margin-top:30px;" id="delate" href="{{URL::to('/today_expand_delate_route/'.$v_show->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>

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
