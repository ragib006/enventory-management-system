
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
                <h3 class="card-title">All Advanced Salary</h3>




                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left:900px;">
                      Advanced Sarary
                    </button>


                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content" style="width:550px;">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Give Advanced Salary</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">


  <form enctype="multipart/form-data" role="form" method="post" action="{{url('/add_advanced_salary_form_action_route')}}">
                          {{ csrf_field() }}



                                     <div class="form-group">
                                               <label for="exampleFormControlSelect1">Employees Name</label>
                                                <select class="form-control" id="exampleFormControlSelect1" name="emp_id" style="width:500px">
                                                   <option value="0">Select</option>

                                                   @foreach( $all_employee_show_dropdown as $v_show)
                                                   <option value="{{$v_show->id}}">{{$v_show->name}}</option>

                                                   @endforeach



                                               </select>
                                     </div>







                                      <div class="form-group">
                                                <label for="exampleFormControlSelect1">Month</label>
                                                 <select class="form-control" id="exampleFormControlSelect1"required name="month" style="width:500px;">
                                                    <option value="no">Select</option>
                                                    <option value="January">January</option>
                                                    <option value="February">February</option>
                                                    <option value="March">March</option>
                                                    <option value="April">April</option>
                                                    <option value="May">May</option>
                                                    <option value="June">June</option>
                                                    <option value="July">July</option>
                                                    <option value="August">August</option>
                                                    <option value="September">September</option>
                                                    <option value="October">October</option>
                                                    <option value="November">November</option>
                                                    <option value="December">December</option>


                                                </select>
                                      </div>






                  <!-- <div class="form-group">
                           <label for="exampleInputEmail1">Year</label>
                           <input style="width:500px;" type="text" name="year" class="form-control" id="exampleInputEmail1" placeholder="Enter Year" required>
                  </div> -->

                  <div class="form-group">
                           <label for="exampleInputEmail1">Advance Salary</label>
                           <input style="width:500px;" type="number" name="advanced" class="form-control" id="exampleInputEmail1" placeholder="Enter advance salary" required>
                  </div>


                  <div style="overflow:hidden;display:block;margin-top:30px;margin-bottom:50px;">
                     <label for="show">Select Date</label>
                      <input name="year" class="show"type="text" />

                   </div>



    <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Done</button>
    </div>
 </form>

                        </div>
                      </div>
                    </div>

                   </div>




              </div>
















              <!-- /.card-header -->
              <div class="card-body" >
                <table id="section" class="table table-bordered table-striped">
                  <thead>
                  <tr>

                     <th style="text-align:center;">Name</th>

                         <th style="text-align:center;">Salary</th>
                          <th style="text-align:center;">Image</th>
                          <th style="text-align:center;">Advanced</th>

                      <th style="text-align:center;">Repayable</th>







                    <th style="text-align:center;">Month</th>
                    <th style="text-align:center;">Date</th>

                    <th style="text-align:center;">Status</th>
                    <th style="text-align:center;">ON/OFF</th>
                    <th style="text-align:center;">Action</th>
                  </tr>
                  </thead>


                  <tbody>

                     @foreach($show_all_advanced_salary as $v_show)

                  <tr>


                    <td style="text-align:center;padding-top:45px;">{{$v_show->many_salary->name}}</td>

                   <td style="text-align:center;padding-top:45px;">{{$v_show->many_salary->salary}} TK</td>
                   <td><img src="{{asset('/images/employees/large/'.$v_show->many_salary->photo)}}" style="width:100px; height:100px;border-radius:2px;" alt="" /></td>
                   <td style="width:50px;text-align:center;padding-top:45px;">{{$v_show->advanced}} TK</td>
                   <td style="text-align:center;padding-top:45px;color:blue;">{{$v_show->many_salary->salary-$v_show->advanced}} TK</td>





                      <td style="text-align:center;padding-top:45px;">{{$v_show->month}}</td>



                    <td style="text-align:center;padding-top:45px;">{{$v_show->year}}</td>



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
  <a class="btn btn-warning btn-sm" style="margin-top:30px;"  href="{{URL::to('/edit_salary_route/'.$v_show->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
  <a class="btn btn-danger btn-sm" style="margin-top:30px;" id="delate" href="{{URL::to('/advanced_salary_delate_route/'.$v_show->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>















            <div id="myModal2{{$v_show->id}}" class="modal hide"style="">
              <div style="width:50%;margin-left:30%;margin-top:5%;">
                       <div class="modal-header" style="background:white;">
                         <h2 style="font-weight:bold;">Profile</h2>
                         <button data-dismiss="modal" class="close" type="button">×</button>

                       </div>
                       <div class="modal-body" style="background:white;">
                         <p><img src="{{asset('/images/employees/large/'.$v_show->many_salary->photo)}}" style="width:250px; height:250px;border-radius:2px;" alt="" /></p>
                         <span style="font-size:22px;font-weight:bold;color:green;">Name :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->many_salary->name}}</span><br>
                         <span style="font-size:22px;font-weight:bold;color:green;">Email :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->many_salary->email}}</span></br>
                        <span style="font-size:22px;font-weight:bold;color:green;font-family:tahoma;">Salary :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->many_salary->salary}} TK</span></br>
                         <span style="font-size:22px;font-weight:bold;color:green;">Phone :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->many_salary->phone}}</span><br>
                         <span style="font-size:22px;font-weight:bold;color:green;">Address :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->many_salary->address}}</span></br>
                         <span style="font-size:22px;font-weight:bold;color:green;">Advanced :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->advanced}} TK</span><br>
                         <span style="font-size:22px;font-weight:bold;color:green;">Month :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->month}}</span></br>
                         <span style="font-size:22px;font-weight:bold;color:green;">Year :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->year}}</span><br>
                         <span style="font-size:22px;font-weight:bold;color:green;">Repayable :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->many_salary->salary-$v_show->advanced}} TK</span><br>


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
