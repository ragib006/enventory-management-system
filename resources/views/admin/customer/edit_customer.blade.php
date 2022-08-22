@extends('admin_layout.admin_design')

@section('change')






           <div class="card card-primary" style="width:650px;margin-left:300px;margin-bottom:260px;margin-top:50px;">
             <div class="card-header">
               <h3 class="card-title">Edit Customer</h3>
             </div>
             <!-- /.card-header -->
             <!-- form start -->



     <form enctype="multipart/form-data" role="form" method="post" action="{{url('/customer_edit_form_action_route/'.$placeholder_value_employees->id)}}">
         {{ csrf_field() }}
       <div class="card-body">
         <div class="form-group">



                      <div class="form-group">
                               <label for="exampleInputEmail1">Customer Name</label>
                               <input style="width:500px;" type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_employees->name}}" required>
                      </div>

                      <div class="form-group">
                               <label for="exampleInputEmail1">Customer Email</label>
                               <input style="width:500px;" type="text" name="email" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_employees->email}}" required>
                      </div>


                      <div class="form-group">
                               <label for="exampleInputEmail1">Customer Phone</label>
                               <input style="width:500px;" type="text" name="phone" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_employees->phone}}" required>
                      </div>

                      <div class="form-group">
                               <label for="exampleInputEmail1">Customer Address</label>
                               <input style="width:500px;" type="text" name="address" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_employees->address}}" required>
                      </div>


                      <div class="form-group">
                               <label for="exampleInputEmail1">Customer Shope Name</label>
                               <input style="width:500px;" type="text" name="shopname" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_employees->shopname}}" required>
                      </div>

                      <div class="form-group" style="width:500px;">
                              <label for="exampleInputFile">Customer Image</label><br>
                                    <img id="image" style="margin-bottom:10px;" src="#">
                                        <div class="input-group">
                                            <div class="custom-file">


                                <input type="file" class="custom-file-input"  name="photo" accept="image/*" class="upload" onchange="readURL(this);">
                                <input type="hidden" name="current_image" value="{{$placeholder_value_employees->photo}}">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                                  </div>


                                  <div style="padding-left:20px;margin-top:-7px;">
                                       <img src="{{asset('/images/customer/large/'.$placeholder_value_employees->photo)}}" style="width:50px; height:50px;" alt="" />

                                    </div>


                                                  <div class="input-group-append">

                                                  </div>
                                                </div>
                                              </div>



                      <div class="form-group">
                               <label for="exampleInputEmail1">Bank Name</label>
                               <input style="width:500px;" type="text" name="bank_name" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_employees->bank_name}}" required>
                      </div>
                      <div class="form-group">
                               <label for="exampleInputEmail1">Account Name</label>
                               <input style="width:500px;" type="text" name="account_name" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_employees->account_name}}" required>
                      </div>
                      <div class="form-group">
                               <label for="exampleInputEmail1">Account Number</label>
                               <input style="width:500px;" type="text" name="account_number" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_employees->account_number}}" required>
                      </div>

                      <div class="form-group">
                               <label for="exampleInputEmail1">Branch Name</label>
                               <input style="width:500px;" type="text" name="bank_branch" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_employees->bank_branch}}" required>
                      </div>
                      <div class="form-group">
                               <label for="exampleInputEmail1">City</label>
                               <input style="width:500px;" type="text" name="city" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_employees->city}}" required>
                      </div>












               <div class="modal-footer">
               <button type="submit" class="btn btn-primary">Done</button>
               </div>
























             </form>
           </div>
</div>


</div>





















@endsection
