
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
                <h3 class="card-title">All Employees</h3>




                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left:950px;">
                      Add Employees
                    </button>


                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content" style="width:550px;">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Emopoyess</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">


  <form enctype="multipart/form-data" role="form" method="post" action="{{url('/add_employees_form_action_route')}}">
                          {{ csrf_field() }}


           <div class="form-group">
                    <label for="exampleInputEmail1">Employees Name</label>
                    <input style="width:500px;" type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter employees name" required>
           </div>

           <div class="form-group">
                    <label for="exampleInputEmail1">Employees Email</label>
                    <input style="width:500px;" type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter employees email" required>
           </div>


           <div class="form-group">
                    <label for="exampleInputEmail1">Employees Phone</label>
                    <input style="width:500px;" type="text" name="phone" class="form-control" id="exampleInputEmail1" placeholder="Enter employees address" required>
           </div>

           <div class="form-group">
                    <label for="exampleInputEmail1">Employees Address</label>
                    <input style="width:500px;" type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter employees address" required>
           </div>

           <div class="form-group">
                     <label for="exampleFormControlSelect1">Employees Salary</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="salary" style="width:500px;">
                         <option value="0">Select</option>
                         <option value="10000">10000 Taka</option>
                         <option value="15000">15000 Taka</option>
                         <option value="20000">20000 Taka</option>
                         <option value="25000">25000 Taka</option>
                         <option value="30000">30000 Taka</option>
                         <option value="35000">35000 Taka</option>
                         <option value="40000">40000 Taka</option>
                         <option value="45000">45000 Taka</option>
                         <option value="50000">50000 Taka</option>
                         <option value="60000">60000 Taka</option>
                         <option value="70000">70000 Taka</option>
                         <option value="80000">80000 Taka</option>
                         <option value="90000">90000 Taka</option>
                         <option value="100000">100000 Taka</option>
                         <option value="120000">120000 Taka</option>
                         <option value="130000">130000 Taka</option>
                         <option value="140000">140000 Taka</option>
                         <option value="150000">150000 Taka</option>
                         <option value="160000">160000 Taka</option>
                         <option value="170000">190000 Taka</option>
                         <option value="180000">180000 Taka</option>
                         <option value="190000">190000 Taka</option>
                         <option value="200000">200000 Taka</option>




                     </select>
           </div>
           <div class="form-group">
                    <label for="exampleInputEmail1">Employees NID</label>
                    <input style="width:500px;" type="text" name="nid" class="form-control" id="exampleInputEmail1" placeholder="Enter employees NID" required>
           </div>

           <!--

           <div class="form-group">
                    <label for="exampleInputEmail1">Employees Explience</label>
                    <input style="width:500px;" type="text" name="exprience" class="form-control" id="exampleInputEmail1" placeholder="Enter employees exprience" required>
           </div>

-->



            <div class="form-group">
                      <label for="exampleFormControlSelect1">Employees Explience</label>
                       <select class="form-control" id="exampleFormControlSelect1" name="exprience" style="width:500px;">
                          <option value="no">Select</option>
                          <option value="0">0 year</option>
                          <option value="1">1 year</option>
                          <option value="2">2 years</option>
                          <option value="3">3 years</option>
                          <option value="4">4 years</option>
                          <option value="5">5 years</option>
                          <option value="6">6 years</option>
                          <option value="7">7 years</option>
                          <option value="8">8 years</option>
                          <option value="9">9 years</option>
                          <option value="10+">10+ years</option>


                      </select>
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

<!---
<div class="from-group">
      <img id="image" src="#">
      <label for="exampleInputFile">Employees Image</label>
<input type="file" name="photo" accept="image/*" class="upload" required onchange="readURL(this);">


    </div>
-->

                  <div class="form-group">
                           <label for="exampleInputEmail1">Employees Vacation</label>
                           <input style="width:500px;" type="text" name="vacation" class="form-control" id="exampleInputEmail1" placeholder="Enter employees Vacation" required>
                  </div>

                  <div class="form-group">
                           <label for="exampleInputEmail1">Employees City</label>
                           <input style="width:500px;" type="text" name="city" class="form-control" id="exampleInputEmail1" placeholder="Enter employees  City" required>
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

                     <th style="text-align:center;">Phone</th>
                     <th style="text-align:center;">Image</th>
                      <th style="text-align:center;">Exprience</th>
                      <th style="text-align:center;">Salary</th>



                    <th style="text-align:center;">Status</th>
                    <th style="text-align:center;">ON/OFF</th>
                    <th style="text-align:center;">Action</th>
                  </tr>
                  </thead>


                  <tbody>

                     @foreach($all_employees as $v_show)

                  <tr>


                    <td style="text-align:center;padding-top:45px;">{{$v_show->name}}</td>
                    <td style="text-align:center;padding-top:45px;">{{$v_show->address}}</td>
                  
                    <td style="text-align:center;padding-top:45px;">{{$v_show->phone}}</td>
                   <td><img src="{{asset('/images/employees/large/'.$v_show->photo)}}" style="width:100px; height:100px;border-radius:2px;" alt="" /></td>
                    <td style="width:50px;text-align:center;padding-top:45px;">{{$v_show->exprience}} year</td>
                    <td style="text-align:center;padding-top:45px;">{{$v_show->salary}}TK</td>




          <td style="">


          @if($v_show->status==1)

           <span style="margin-top:33px;display:block;text-align:center;" class="label label-success">{{'Active'}}</span>

          @else

            <span style="margin-top:33px;display:block; text-align:center;"  class="label label-danger" >{{'Not Active'}}</span>

          @endif



           </td>

           <td style="">

          @if($v_show->status==1)

          <a style="margin-top:30px;margin-left:20px;" class="btn btn-primary btn-sm"  href="{{URL::to('/active_employees_unactive/'.$v_show->id)}}">ON</a>

           @else

         <a style="margin-top:30px;margin-left:20px;" class="btn btn-success btn-sm" href="{{URL::to('/unactive_employees_active/'.$v_show->id)}}">OFF</a>

          @endif



           </td>

       <td>




    <!-- <a href="#myModal2{{$v_show->id}}" style="margin-top:30px;" data-toggle="modal" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a> -->
      <a class="btn btn-primary btn-sm" style="margin-top:30px;"  href="{{URL::to('/employees_view_route/'.$v_show->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></i></a>
  <a class="btn btn-warning btn-sm" style="margin-top:30px;"  href="{{URL::to('/employees_edit_route/'.$v_show->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
  <a class="btn btn-danger btn-sm" style="margin-top:30px;" id="delate" href="{{URL::to('/employees_delate_route/'.$v_show->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>































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
