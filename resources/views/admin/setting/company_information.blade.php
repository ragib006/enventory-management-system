
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
                <h3 class="card-title">Company Information</h3>




                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left:950px;">
                      Add Information
                    </button>


                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content" style="width:550px;">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Company Information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">


  <form enctype="multipart/form-data" role="form" method="post" action="{{url('/company_information_form_action_route')}}">
                          {{ csrf_field() }}


           <div class="form-group">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input style="width:500px;" type="text" name="company_name" class="form-control" id="exampleInputEmail1" placeholder="Enter employees name" required>
           </div>

           <div class="form-group">
                    <label for="exampleInputEmail1">Company Email</label>
                    <input style="width:500px;" type="text" name="company_email" class="form-control" id="exampleInputEmail1" placeholder="Enter employees email" required>
           </div>


           <div class="form-group">
                    <label for="exampleInputEmail1">Company Phone</label>
                    <input style="width:500px;" type="text" name="company_phone" class="form-control" id="exampleInputEmail1" placeholder="Enter employees address" required>
           </div>

           <div class="form-group">
                    <label for="exampleInputEmail1">Company Address</label>
                    <input style="width:500px;" type="text" name="company_address" class="form-control" id="exampleInputEmail1" placeholder="Enter employees address" required>
           </div>








          <div class="form-group" style="width:500px;">

                    <label for="exampleInputFile">Company Logo</label><br>
                      <img id="image" style="margin-bottom:10px;" src="#">
                    <div class="input-group">
                      <div class="custom-file">

                        <input type="file" class="custom-file-input"  required  name="company_logo" accept="image/*" class="upload" required onchange="readURL(this);">
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

                     <th style="text-align:center;">Company Name</th>
                       <th style="text-align:center;"> Email</th>
                     <th style="text-align:center;">Address</th>

                     <th style="text-align:center;">Phone</th>

                     <th style="text-align:center;">Image</th>



                    <th style="text-align:center;">Status</th>
                    <th style="text-align:center;">ON/OFF</th>
                    <th style="text-align:center;">Action</th>
                  </tr>
                  </thead>


                  <tbody>

                     @foreach($all_information as $v_show)

                  <tr>


                    <td style="text-align:center;padding-top:45px;">{{$v_show->company_name}}</td>
                    <td style="text-align:center;padding-top:45px;">{{$v_show->company_email}}</td>
                    <td style="text-align:center;padding-top:45px;">{{$v_show->company_address}}</td>

                    <td style="text-align:center;padding-top:45px;">{{$v_show->company_phone}}</td>


                   <td><img src="{{asset('/images/setting/large/'.$v_show->company_logo)}}" style="width:100px; height:100px;border-radius:2px;" alt="" /></td>





          <td style="">


          @if($v_show->company_status==1)

           <span style="margin-top:33px;display:block;text-align:center;" class="label label-success">{{'Active'}}</span>

          @else

            <span style="margin-top:33px;display:block; text-align:center;"  class="label label-danger" >{{'Not Active'}}</span>

          @endif



           </td>

           <td style="">

          @if($v_show->company_status==1)

          <a style="margin-top:30px;margin-left:20px;" class="btn btn-primary btn-sm"  href="{{URL::to('/active_slipper_unactive/'.$v_show->id)}}">ON</a>

           @else

         <a style="margin-top:30px;margin-left:20px;" class="btn btn-success btn-sm" href="{{URL::to('/unactive_slipper_active/'.$v_show->id)}}">OFF</a>

          @endif



           </td>

       <td>




    <a href="#myModal2{{$v_show->id}}" style="margin-top:30px;" data-toggle="modal" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
  <a class="btn btn-warning btn-sm" style="margin-top:30px;"  href="{{URL::to('/setting_edit_route/'.$v_show->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
  <a class="btn btn-danger btn-sm" style="margin-top:30px;" id="delate" href="{{URL::to('/setting_delate_route/'.$v_show->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>















            <div id="myModal2{{$v_show->id}}" class="modal hide"style="">
              <div style="width:50%;margin-left:30%;margin-top:5%;">
                       <div class="modal-header" style="background:white;">
                         <h2 style="font-weight:bold;">Profile</h2>
                         <button data-dismiss="modal" class="close" type="button">×</button>

                       </div>
                       <div class="modal-body" style="background:white;">
                         <p><img src="{{asset('/images/slipper/large/'.$v_show->company_logo)}}" style="width:250px; height:250px;border-radius:2px;" alt="" /></p>
                         <span style="font-size:20px;font-weight:bold;color:green;">Name :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->company_name}}</span><br>
                         <span style="font-size:20px;font-weight:bold;color:green;">Email :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->company_address}}</span></br>
                         <span style="font-size:20px;font-weight:bold;color:green;">Phone :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->company_email}}</span><br>
                         <span style="font-size:20px;font-weight:bold;color:green;">Address :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->address}}</span></br>

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
