
@extends('frontend_layout.front_design')

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
                <h3 class="card-title">All Student</h3>




                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left:950px;">
                      Add Student
                    </button>


                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content" style="width:550px;">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">


  <form enctype="multipart/form-data" role="form" method="post" action="{{url('/add_student_form_action_route')}}">
                          {{ csrf_field() }}


           <div class="form-group">
                    <label for="exampleInputEmail1">Student Name</label>
                    <input style="width:500px;" type="text" name="student_name" class="form-control" id="exampleInputEmail1" placeholder="Enter employees name" required>
           </div>

           <div class="form-group">
                    <label for="exampleInputEmail1">Student Id</label>
                    <input style="width:500px;" type="text" name="student_id" class="form-control" id="exampleInputEmail1" placeholder="Enter employees email" required>
           </div>


           <div class="form-group">
                     <label for="exampleFormControlSelect1">Student Department</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="student_department" required style="width:500px;">
                         <option >Select</option>
                         <option value="1">CSE</option>
                         <option value="2">EEE</option>
                         <option value="3">CIVIL</option>
                         <option value="4">ECE</option>
                         <option value="5">ETE</option>
                         <option value="6">BBA</option>





                     </select>
           </div>





          <div class="form-group" style="width:500px;">
                    <label for="exampleInputFile">Student Image</label><br>
                      <img id="image" style="margin-bottom:10px;" src="#">
                    <div class="input-group">
                      <div class="custom-file">

                        <input type="file" class="custom-file-input"  required  name="student_photo" accept="image/*" class="upload" required onchange="readURL(this);">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">

                      </div>
                    </div>
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

                     <th style="text-align:center;">Student Name</th>
                     <th style="text-align:center;">Student ID</th>
                     <th style="text-align:center;">Student Department</th>



                     <th style="text-align:center;">Student Image</th>




                    <th style="text-align:center;">Status</th>
                    <th style="text-align:center;">ON/OFF</th>
                    <th style="text-align:center;">Action</th>
                  </tr>
                  </thead>


                  <tbody>

                     @foreach($all_student as $v_show)

                  <tr>


                    <td style="text-align:center;padding-top:45px;">{{$v_show->student_id}}</td>
                    <td style="text-align:center;padding-top:45px;">{{$v_show->student_name}}</td>

                    <td style="text-align:center;padding-top:45px;">

                       @if($v_show->student_department==1)

                       <span class="label label-success">{{'CSE'}}</span>

                       @elseif($v_show->student_department==2)
                       <span class="label label-success">{{'EEE'}}</span>

                       @elseif($v_show->student_department==3)
                       <span class="label label-success">{{'CIVIL'}}</span>

                       @elseif($v_show->student_department==4)
                       <span class="label label-success">{{'ECE'}}</span>
                       @elseif($v_show->student_department==5)
                       <span class="label label-success">{{'ETE'}}</span>
                       @else
                       <span class="label label-success">{{'CSE'}}</span>
                       @endif






                     </td>
                   <td>
                     <center>
                     <img src="{{asset('/images/student/large/'.$v_show->student_photo)}}" style="width:100px; height:100px;border-radius:2px;" alt="" />
                   </center>
                   </td>






          <td style="">


          @if($v_show->status==1)

           <span style="margin-top:33px;display:block;text-align:center;" class="label label-success">{{'Active'}}</span>

          @else

            <span style="margin-top:33px;display:block; text-align:center;"  class="label label-danger" >{{'Not Active'}}</span>

          @endif



           </td>

           <td style="">

          @if($v_show->status==1)

          <a style="margin-top:30px;margin-left:20px;" class="btn btn-primary btn-sm"  href="{{URL::to('/active_student_unactive/'.$v_show->id)}}">ON</a>

           @else

         <a style="margin-top:30px;margin-left:20px;" class="btn btn-success btn-sm" href="{{URL::to('/unactive_student_active/'.$v_show->id)}}">OFF</a>

          @endif



           </td>




       <td>
         <center>

    <a href="#myModal2{{$v_show->id}}" style="margin-top:30px;" data-toggle="modal" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
    <!-- <a class="btn btn-info btn-sm" style="margin-top:30px;"  href="{{URL::to('/student_view_route/'.$v_show->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></i></a> -->
    <a class="btn btn-warning btn-sm" style="margin-top:30px;"  href="{{URL::to('/student_edit_route/'.$v_show->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
    <a class="btn btn-danger btn-sm" style="margin-top:30px;" id="delate" href="{{URL::to('/student_delate_route/'.$v_show->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>
  </center>
      </td>



                    <div id="myModal2{{$v_show->id}}" class="modal hide"style="">
                      <div style="width:50%;margin-left:30%;margin-top:5%;">
                               <div class="modal-header" style="background:white;">
                                 <h2 style="font-weight:bold;">{{$v_show->product_name}}</h2>
                                 <button data-dismiss="modal" class="close" type="button">×</button>

                               </div>
                               <div class="modal-body" style="background:white;">

                                  <p><img src="{{asset('/images/student/large/'.$v_show->student_photo)}}" style="width:250px; height:250px;border-radius:2px;" alt="" /></p>
                                 <span style="font-size:18px;font-weight:bold;color:black;font-family:Arial;">Student Name :</span>  <span style="font-size:18px;color:blue;">{{$v_show->student_name}}</span><br>
                                 <span style="font-size:18px;font-weight:bold;color:black;font-family:Arial;">Student ID :</span>  <span style="font-size:18px;color:blue;">{{$v_show->student_id}}</span></br>
                                 <span style="font-size:18px;font-weight:bold;color:black;font-family:Arial;">Student Department :</span>  <span style="font-size:18px;color:blue;">

                                   @if($v_show->student_department==1)

                                   <span class="label label-success">{{'CSE'}}</span>

                                   @elseif($v_show->student_department==2)
                                   <span class="label label-success">{{'EEE'}}</span>

                                   @elseif($v_show->student_department==3)
                                   <span class="label label-success">{{'CIVIL'}}</span>

                                   @elseif($v_show->student_department==4)
                                   <span class="label label-success">{{'ECE'}}</span>
                                   @elseif($v_show->student_department==5)
                                   <span class="label label-success">{{'ETE'}}</span>
                                   @else
                                   <span class="label label-success">{{'CSE'}}</span>
                                   @endif



                                 </span><br>

                               </div>
                               <div class="modal-footer"><a data-dismiss="modal" class="btn btn-inverse" href="#">Cancel</a> </div>
                             </div>

                        </div>

















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
