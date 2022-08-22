
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
                <h3 class="card-title">All Attentdance</h3>
                 <center style="padding:0px;margin:0px;out-line:0px;">



                 </center>

              </div>













     <?php


       $sl=1;


     ?>



              <div class="card-body">
                <table id="section" class="table table-bordered table-striped">
                  <thead>
                  <tr>

                     <th style="text-align:center;">SL</th>


                     <th style="text-align:center;">Phone</th>





                    <th style="text-align:center;">Month</th>

                    <th style="text-align:center;">Action</th>
                  </tr>
                  </thead>



                  <tbody>

                     @foreach($all_attendance as $v_show)

                  <tr>


                    <td style="text-align:center;padding-top:45px;">{{$sl++}}</td>

                    <td style="text-align:center;padding-top:45px;color:blue;">{{$v_show->att_date}}</td>








                  <td style="text-align:center;padding-top:45px;">

                     {{$v_show->att_month}}


                  </td>


       <td>



    <center>



        <a class="btn btn-success btn-sm" style="margin-top:30px;"  href="{{URL::to('/view_attendance/'.$v_show->att_date)}}"><i  class="fa fa-eye" aria-hidden="true"></i></a>
        <!-- <a class="btn btn-warning btn-sm" style="margin-top:30px;"  href="{{URL::to('/edit_attendance/'.$v_show->att_date)}}"><i class="fa fa-edit" aria-hidden="true"></i></a> -->
    <a class="btn btn-danger btn-sm" style="margin-top:30px;" id="delate" href="{{URL::to('/delete_attendance/'.$v_show->att_date)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>

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
