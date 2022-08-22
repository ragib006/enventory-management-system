@extends('admin_layout.admin_design')

@section('change')






           <div class="card card-primary" style="width:650px;margin-left:300px;margin-bottom:260px;margin-top:50px;">
             <div class="card-header">
               <h3 class="card-title">Edit Product</h3>
             </div>
             <!-- /.card-header -->
             <!-- form start -->



     <form enctype="multipart/form-data" role="form" method="post" action="{{url('/company_edit_form_action_route/'.$setting_placeholder_value->id)}}">
         {{ csrf_field() }}
       <div class="card-body">
         <div class="form-group">




           <label for="exampleInputEmail1">Company Name</label>
         <input style="width:500px;" type="text" name="company_name" class="form-control" id="exampleInputEmail1" value="{{$setting_placeholder_value->company_name}}" required>
         </div>



                    <div class="form-group">
                             <label for="exampleInputEmail1">Company Address</label>
                             <input style="width:500px;" type="text" name="company_address" class="form-control" id="exampleInputEmail1" value="{{$setting_placeholder_value->company_address}}" required>
                    </div>


                    <div class="form-group">
                             <label for="exampleInputEmail1">Company Email</label>
                             <input style="width:500px;" type="text" name="company_email" class="form-control" id="exampleInputEmail1" value="{{$setting_placeholder_value->company_email}}"  required>
                    </div>

                    <div class="form-group">
                             <label for="exampleInputEmail1">Company Phone</label>
                             <input style="width:500px;" type="text" name="company_phone" class="form-control" id="exampleInputEmail1" value="{{$setting_placeholder_value->company_phone}}"  required>
                    </div>





                     <div class="form-group" style="width:500px;">
                             <label for="exampleInputFile">Company Logo</label><br>
                                   <img id="image" style="margin-bottom:10px;" src="#">
                                       <div class="input-group">
                                           <div class="custom-file">


                               <input type="file" class="custom-file-input"  name="company_logo" accept="image/*" class="upload" onchange="readURL(this);">
                               <input type="hidden" name="current_image" value="{{$setting_placeholder_value->company_logo }}">
                               <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                                 </div>


                                 <div style="padding-left:20px;margin-top:-7px;">
                                      <img src="{{asset('/images/setting/large/'.$setting_placeholder_value->company_logo)}}" style="width:50px; height:50px;" alt="" />

                                   </div>


                                                 <div class="input-group-append">

                                                 </div>
                                               </div>
                                             </div>









               <!-- /.card-body -->

               <div class="card-footer" style="margin-top:50px;">


                <button type="submit" class="btn btn-primary" style="margin-left:500px;">Done</button>

               </div>


             </form>
           </div>
</div>

























@endsection
