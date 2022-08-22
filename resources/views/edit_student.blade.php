
@extends('frontend_layout.front_design')

@section('change')







           <div class="card card-primary" style="width:650px;margin-left:300px;margin-bottom:260px;margin-top:50px;">
             <div class="card-header">
               <h3 class="card-title">Edit Student</h3>
             </div>
             <!-- /.card-header -->
             <!-- form start -->



     <form enctype="multipart/form-data" role="form" method="post" action="{{url('/student_edit_form_action_route/'.$placeholder_value_student->id)}}">
         {{ csrf_field() }}
       <div class="card-body">
         <div class="form-group">

           <label for="exampleInputEmail1">Student Name</label>
         <input style="width:500px;" type="text" name="student_name" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_student->student_name}}" required>
         </div>
         <div class="form-group">
             <label for="exampleInputEmail1">Student Id</label>
             <input style="width:500px;" type="text" name="student_id" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_student->student_id}}" required>
         </div>

         <div class="form-group" style="">
                   <label for="exampleFormControlSelect1">Employees Salary</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="student_department" style="width:500px;">
                       <option>Select</option>
                       <option value="1" {{old('student_department',$placeholder_value_student->student_department)=="1"? 'selected':''}}>CSE</option>
                       <option value="2" {{old('student_department',$placeholder_value_student->student_department)=="2"? 'selected':''}}>EEE</option>
                       <option value="3" {{old('student_department',$placeholder_value_student->student_department)=="3"? 'selected':''}}>CIVIL</option>
                       <option value="4" {{old('student_department',$placeholder_value_student->student_department)=="4"? 'selected':''}}>ECE</option>
                       <option value="5" {{old('student_department',$placeholder_value_student->student_department)=="5"? 'selected':''}}>ETE</option>
                       <option value="6" {{old('student_department',$placeholder_value_student->student_department)=="6"? 'selected':''}}>BBA</option>

               </select>
         </div>

         <div class="form-group" style="width:500px;">
             <label for="exampleInputFile">Employees Image</label><br>
                 <img id="image" style="margin-bottom:10px;" src="#">
                    <div class="input-group">
                      <div class="custom-file">
                       <input type="file" class="custom-file-input"  name="student_photo" accept="image/*" class="upload" onchange="readURL(this);">
                       <input type="hidden" name="current_image" value="{{$placeholder_value_student->student_photo}}">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                     </div>
              <div style="padding-left:20px;margin-top:-7px;">
               <img src="{{asset('/images/student/large/'.$placeholder_value_student->student_photo)}}" style="width:50px; height:50px;" alt="" />
            </div>


                                                         <div class="input-group-append">

                                                         </div>
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
