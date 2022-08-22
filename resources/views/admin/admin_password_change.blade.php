@extends('admin_layout.admin_design')

@section('change')






           <div class="card card-primary" style="width:650px;margin-left:300px;margin-bottom:260px;margin-top:50px;">
             <div class="card-header">
               <h3 class="card-title">Change Password</h3>
             </div>
             <!-- /.card-header -->
             <!-- form start -->



     <form enctype="multipart/form-data" role="form" method="post" action="{{url('/admin_password_change_form_action_route')}}">
         {{ csrf_field() }}
       <div class="card-body">
         <div class="form-group">

           <label for="exampleInputEmail1">Enter New Password</label>
         <input style="width:500px;" type="password" name="new_password" class="form-control" id="exampleInputEmail1" placeholder="Enter new password" required>
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
