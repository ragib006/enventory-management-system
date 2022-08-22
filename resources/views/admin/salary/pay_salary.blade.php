
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
                <h3 class="card-title">All Pay Salary</h3> <span style="margin-left:30px;font-weight:bold;"> {{ date("F Y")}}</span>









              </div>
















              <!-- /.card-header -->
              <div class="card-body" >
                <table id="section" class="table table-bordered table-striped">
                  <thead>
                  <tr>

                     <th style="text-align:center;">Name</th>
                     <th style="text-align:center;">Salary</th>


                         <th style="text-align:center;">Month</th>
                          <th style="text-align:center;">Image</th>
                          <th style="text-align:center;">Advanced</th>










                    <th style="text-align:center;">Ad</th>
                    <th style="text-align:center;">Month</th>


                    <th style="text-align:center;">Status</th>
                    <th style="text-align:center;">ON/OFF</th>
                    <th style="text-align:center;">Action</th>
                  </tr>
                  </thead>


                  <tbody>

                     @foreach($all_employee_information_with_advanced as $v_show)

                  <tr>


                    <td style="text-align:center;padding-top:45px;">{{$v_show->name}}</td>
                    <td style="text-align:center;padding-top:45px;">{{$v_show->salary}} TK</td>

                     <td style="text-align:center;padding-top:45px;color:blue;">{{ date("F Y")}}</td>
                   <td><img src="{{asset('/images/employees/large/'.$v_show->photo)}}" style="width:100px; height:100px;border-radius:2px;" alt="" /></td>








                      <td style="text-align:center;padding-top:45px;">sdfsfsd</td>







          <td style="">


          @if($v_show->status==1)

           <span style="margin-top:33px;display:block;text-align:center;" class="label label-success">{{'Active'}}</span>

          @else

            <span style="margin-top:33px;display:block; text-align:center;"  class="label label-danger" >{{'Not Active'}}</span>

          @endif



           </td>

           <td style="">

          @if($v_show->status==1)

          <a style="margin-top:30px;margin-left:20px;" class="btn btn-primary btn-sm"  href="{{URL::to('/active_advancrd_salary_unactive/'.$v_show->id)}}">ON</a>

           @else

         <a style="margin-top:30px;margin-left:20px;" class="btn btn-success btn-sm" href="{{URL::to('/unactive_advancrd_salary_active/'.$v_show->id)}}">OFF</a>

          @endif



           </td>

       <td>




    <a href="#myModal2{{$v_show->id}}" style="margin-top:30px;" data-toggle="modal" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
  <a class="btn btn-warning btn-sm" style="margin-top:30px;"  href="{{URL::to('/edit_salary_route/'.$v_show->id)}}">Pay</a>
  <a class="btn btn-danger btn-sm" style="margin-top:30px;" id="delate" href="{{URL::to('/advanced_salary_delate_route/'.$v_show->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
































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
