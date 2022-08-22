
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
                <h3 class="card-title">All  Customer</h3>




                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left:950px;">
                      Add Customer
                    </button>


                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content" style="width:550px;">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Customer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">


  <form enctype="multipart/form-data" role="form" method="post" action="{{url('/add_customer_form_action_route')}}">
                                   {{ csrf_field() }}


           <div class="form-group">
                    <label for="exampleInputEmail1">Customer Name</label>
                    <input style="width:500px;" type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter customer name" required>
           </div>

           <div class="form-group">
                    <label for="exampleInputEmail1">Customer Email</label>
                    <input style="width:500px;" type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter customer email" required>
           </div>


           <div class="form-group">
                    <label for="exampleInputEmail1">Customer Phone</label>
                    <input style="width:500px;" type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter Customer phone" required>
           </div>

           <div class="form-group">
                    <label for="exampleInputEmail1">Customer Address</label>
                    <input style="width:500px;" type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter customer address" required>
           </div>


           <div class="form-group">
                    <label for="exampleInputEmail1">Customer Shope Name</label>
                    <input style="width:500px;" type="text" name="shopname" class="form-control" id="exampleInputEmail1" placeholder="Enter customer Shope Name" required>
           </div>

           <div class="form-group" style="width:500px;">
                     <label for="exampleInputFile">Employees Image</label><br>
                       <img id="image" style="margin-bottom:10px;" src="#">
                     <div class="input-group">
                       <div class="custom-file">

                         <input type="file" class="custom-file-input"  required  name="photo" accept="image/*" class="upload" required onchange="readURL(this);">
                         <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                       </div>
                       <div class="input-group-append">

                       </div>
                     </div>
                   </div>


           <div class="form-group">
                    <label for="exampleInputEmail1">Bank Name</label>
                    <input style="width:500px;" type="text" name="bank_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Bank Name" required>
           </div>
           <div class="form-group">
                    <label for="exampleInputEmail1">Account Name</label>
                    <input style="width:500px;" type="text" name="account_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Customer Account Name" required>
           </div>
           <div class="form-group">
                    <label for="exampleInputEmail1">Account Number</label>
                    <input style="width:500px;" type="text" name="account_number" class="form-control" id="exampleInputEmail1" placeholder="Enter Customer Account Number" required>
           </div>

           <div class="form-group">
                    <label for="exampleInputEmail1">Branch Name</label>
                    <input style="width:500px;" type="text" name="bank_branch" class="form-control" id="exampleInputEmail1" placeholder="Enter Branch Name" required>
           </div>
           <div class="form-group">
                    <label for="exampleInputEmail1">City</label>
                    <input style="width:500px;" type="text" name="city" class="form-control" id="exampleInputEmail1" placeholder="Enter City" required>
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
                     <th style="text-align:center;">Address</th>
                      <th style="text-align:center;">Email</th>

                     <th style="text-align:center;">Phone</th>
                     <th style="text-align:center;">Image</th>

                    


                    <th style="text-align:center;">City</th>


                    <th style="text-align:center;">Status</th>
                    <th style="text-align:center;">ON/OFF</th>
                    <th style="text-align:center;">Action</th>
                  </tr>
                  </thead>


                  <tbody>

                     @foreach($show_all_customer as $v_show)

                  <tr>


                    <td style="text-align:center;padding-top:45px;">{{$v_show->name}}</td>
                    <td style="text-align:center;padding-top:45px;">{{$v_show->address}}</td>
                      <td style="text-align:center;padding-top:45px;">{{$v_show->email}}</td>

                    <td style="text-align:center;padding-top:45px;">{{$v_show->phone}}</td>
                   <td><img src="{{asset('/images/customer/large/'.$v_show->photo)}}" style="width:100px; height:100px;border-radius:2px;" alt="" /></td>

                

                    <td style="text-align:center;padding-top:45px;">{{$v_show->city}}</td>



          <td style="">


          @if($v_show->status==1)

           <span style="margin-top:33px;display:block;text-align:center;" class="label label-success">{{'Active'}}</span>

          @else

            <span style="margin-top:33px;display:block; text-align:center;"  class="label label-danger" >{{'Not Active'}}</span>

          @endif



           </td>

           <td style="">

          @if($v_show->status==1)

          <a style="margin-top:30px;margin-left:20px;" class="btn btn-primary btn-sm"  href="{{URL::to('/active_customer_unactive/'.$v_show->id)}}">ON</a>

           @else

         <a style="margin-top:30px;margin-left:20px;" class="btn btn-success btn-sm" href="{{URL::to('/unactive_customer_active/'.$v_show->id)}}">OFF</a>

          @endif



           </td>

       <td style="">



  <a href="#myModal2{{$v_show->id}}" style="margin-top:30px" data-toggle="modal" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
  <a class="btn btn-warning btn-sm" style="margin-top:30px;"  href="{{URL::to('/customer_edit_route/'.$v_show->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
  <a class="btn btn-danger btn-sm" style="margin-top:30px;" id="delate" href="{{URL::to('/customer_delate_route/'.$v_show->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>




</td>










            <div id="myModal2{{$v_show->id}}" class="modal hide"style="">
              <div style="width:50%;margin-left:30%;margin-top:5%;">
                       <div class="modal-header" style="background:white;">
                         <h2 style="font-weight:bold;">Profile</h2>
                         <button data-dismiss="modal" class="close" type="button">×</button>

                       </div>
                       <div class="modal-body" style="background:white;">
                         <p><img src="{{asset('/images/customer/large/'.$v_show->photo)}}" style="width:250px; height:250px;border-radius:2px;" alt="" /></p>
                         <span style="font-size:20px;font-weight:bold;color:green;font-family:tahoma;">Customer Name :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->name}}</span><br>
                         <span style="font-size:20px;font-weight:bold;color:green;font-family:tahoma;">Customer Email :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->email}}</span></br>
                         <span style="font-size:20px;font-weight:bold;color:green;font-family:tahoma;">Customer Phone :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->phone}}</span><br>
                         <span style="font-size:20px;font-weight:bold;color:green;font-family:tahoma;">Customer Address :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->address}}</span></br>
                         <span style="font-size:20px;font-weight:bold;color:green;font-family:tahoma;">Customer Shope :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->shopname}}</span><br>
                         <span style="font-size:20px;font-weight:bold;color:green;font-family:tahoma;">Bank Name :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->bank_name}}</span></br>
                         <span style="font-size:20px;font-weight:bold;color:green;font-family:tahoma;">Account Name :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->account_name}}</span><br>
                         <span style="font-size:20px;font-weight:bold;color:green;font-family:tahoma;">Account Number :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->account_number}}</span></br>
                         <span style="font-size:20px;font-weight:bold;color:green;font-family:tahoma;">Bank Branch :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->bank_branch}}</span><br>
                          <span style="font-size:20px;font-weight:bold;color:green;font-family:tahoma;">City :</span>  <span style="font-size:18px;font-weight:bold;color:blue;">{{$v_show->city}}</span><br>


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
