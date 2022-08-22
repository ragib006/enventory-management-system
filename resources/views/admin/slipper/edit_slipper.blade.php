@extends('admin_layout.admin_design')

@section('change')






           <div class="card card-primary" style="width:650px;margin-left:300px;margin-bottom:260px;margin-top:50px;">
             <div class="card-header">
               <h3 class="card-title">Edit Slipper</h3>
             </div>
             <!-- /.card-header -->
             <!-- form start -->



     <form enctype="multipart/form-data" role="form" method="post" action="{{url('/slipper_edit_form_action_route/'.$placeholder_value_employees->id)}}">
         {{ csrf_field() }}
       <div class="card-body">
         <div class="form-group">

           <label for="exampleInputEmail1">Slipper Name</label>
         <input style="width:500px;" type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_employees->name}}" required>
         </div>
         <div class="form-group">
             <label for="exampleInputEmail1">Address</label>
             <input style="width:500px;" type="text" name="address" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_employees->address}}" required>
         </div>
         <div class="form-group">
             <label for="exampleInputEmail1">Email</label>
             <input style="width:500px;" type="text" name="email" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_employees->email}}" required>
         </div>
         <div class="form-group">
       <label for="exampleInputEmail1">Phone</label>
        <input style="width:500px;" type="text" name="phone" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_employees->phone}}" required>
       </div>


       <div class="form-group">
                 <label for="exampleFormControlSelect1">Slipper Type</label>
                  <select class="form-control" id="exampleFormControlSelect1" name="type" style="width:500px;">
                     <option value="0">Select</option>
                     <option value="Distributor" {{old('exprience',$placeholder_value_employees->type)=="Distributor"? 'selected':''}}>Distributor</option>
                     <option value="Whole Seller" {{old('exprience',$placeholder_value_employees->type)=="Whole Seller"? 'selected':''}}>Whole Seller</option>
                     <option value="Brochure" {{old('exprience',$placeholder_value_employees->type)=="Brochure"? 'selected':''}}>Brochure</option>




                 </select>
       </div>

                                   <div class="form-group">
                                            <label for="exampleInputEmail1">Shope Name</label>
                                            <input style="width:500px;" type="text" name="shop_name" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_employees->shop_name}}"  required>
                                   </div>


                             <div class="form-group" style="width:500px;">
                                     <label for="exampleInputFile">Slipper Image</label><br>
                                           <img id="image" style="margin-bottom:10px;" src="#">
                                               <div class="input-group">
                                                   <div class="custom-file">


                                       <input type="file" class="custom-file-input"  name="photo" accept="image/*" class="upload" onchange="readURL(this);">
                                       <input type="hidden" name="current_image" value="{{$placeholder_value_employees->photo}}">
                                       <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                                         </div>


                                         <div style="padding-left:20px;margin-top:-7px;">
                                              <img src="{{asset('/images/slipper/large/'.$placeholder_value_employees->photo)}}" style="width:50px; height:50px;" alt="" />

                                           </div>


                                                         <div class="input-group-append">

                                                         </div>
                                                       </div>
                                                     </div>








                         </div>



                         <div class="form-group" style="margin-left:20px;">
                                  <label for="exampleInputEmail1">Bank Name</label>
                                  <input style="width:500px;" type="text" name="bank_name" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_employees->bank_name}}" required>
                         </div>

                         <div class="form-group" style="margin-left:20px;">
                                  <label for="exampleInputEmail1">Account Name</label>
                                  <input style="width:500px;" type="text" name="account_name" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_employees->account_name}}"  required>
                         </div>
                         <div class="form-group" style="margin-left:20px;">
                                  <label for="exampleInputEmail1">Account Number</label>
                                  <input style="width:500px;" type="text" name="account_number" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_employees->account_number}}"  required>
                         </div>
                         <div class="form-group" style="margin-left:20px;">
                                  <label for="exampleInputEmail1">Branch Name</label>
                                  <input style="width:500px;" type="text" name="branch_name" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_employees->branch_name}}"  required>
                         </div>
                         <div class="form-group" style="margin-left:20px;">
                                  <label for="exampleInputEmail1">City</label>
                                  <input style="width:500px;" type="text" name="city" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_employees->city}}"  required>
                         </div>










               <!-- /.card-body -->

               <div class="card-footer" style="margin-top:50px;">


                <button type="submit" class="btn btn-primary" style="margin-left:500px;">Done</button>

               </div>
             </form>
           </div>
</div>

























@endsection
