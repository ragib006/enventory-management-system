@extends('admin_layout.admin_design')

@section('change')






           <div class="card card-primary" style="width:650px;margin-left:300px;margin-bottom:260px;margin-top:50px;">
             <div class="card-header">
               <h3 class="card-title">Edit Employees</h3>
             </div>
             <!-- /.card-header -->
             <!-- form start -->



     <form enctype="multipart/form-data" role="form" method="post" action="{{url('/employees_edit_form_action_route/'.$placeholder_value_employees->id)}}">
         {{ csrf_field() }}
       <div class="card-body">
         <div class="form-group">

           <label for="exampleInputEmail1">category Name</label>
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
                     <label for="exampleFormControlSelect1">Employees Explience</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="exprience" style="width:500px;">
                               <option value="no">Select</option>
                                <option value="0" {{old('exprience',$placeholder_value_employees->exprience)=="0"? 'selected':''}}>0 year</option>
                                <option value="1" {{old('exprience',$placeholder_value_employees->exprience)=="1"? 'selected':''}}>1 year</option>
                                <option value="2" {{old('exprience',$placeholder_value_employees->exprience)=="2"? 'selected':''}}>2 years</option>
                                <option value="3" {{old('exprience',$placeholder_value_employees->exprience)=="3"? 'selected':''}}>3 years</option>
                                <option value="4" {{old('exprience',$placeholder_value_employees->exprience)=="4"? 'selected':''}}>4 years</option>
                                <option value="5" {{old('exprience',$placeholder_value_employees->exprience)=="5"? 'selected':''}}>5 years</option>
                                <option value="6" {{old('exprience',$placeholder_value_employees->exprience)=="6"? 'selected':''}}>6 years</option>
                                <option value="7" {{old('exprience',$placeholder_value_employees->exprience)=="7"? 'selected':''}}>7 years</option>
                                <option value="9" {{old('exprience',$placeholder_value_employees->exprience)=="8"? 'selected':''}}>8 years</option>
                                <option value="9" {{old('exprience',$placeholder_value_employees->exprience)=="9"? 'selected':''}}>9 years</option>
                                <option value="10+"{{old('exprience',$placeholder_value_employees->exprience)=="10+"? 'selected':''}}>10+ years</option>
                              </select>
                      </div>


                                   <div class="form-group">
                                            <label for="exampleInputEmail1">Employees NID</label>
                                            <input style="width:500px;" type="text" name="nid" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_employees->nid}}"  required>
                                   </div>


                             <div class="form-group" style="width:500px;">
                                     <label for="exampleInputFile">Employees Image</label><br>
                                           <img id="image" style="margin-bottom:10px;" src="#">
                                               <div class="input-group">
                                                   <div class="custom-file">


                                       <input type="file" class="custom-file-input"  name="photo" accept="image/*" class="upload" onchange="readURL(this);">
                                       <input type="hidden" name="current_image" value="{{$placeholder_value_employees->photo}}">
                                       <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                                         </div>


                                         <div style="padding-left:20px;margin-top:-7px;">
                                              <img src="{{asset('/images/employees/large/'.$placeholder_value_employees->photo)}}" style="width:50px; height:50px;" alt="" />

                                           </div>


                                                         <div class="input-group-append">

                                                         </div>
                                                       </div>
                                                     </div>








                         </div>
                         <div class="form-group" style="margin-left:20px;">
                                   <label for="exampleFormControlSelect1">Employees Salary</label>
                                    <select class="form-control" id="exampleFormControlSelect1" name="salary" style="width:500px;">
                                       <option value="0">Select</option>
                                       <option value="10000" {{old('salary',$placeholder_value_employees->salary)=="10000"? 'selected':''}}>10000 Taka</option>
                                       <option value="15000" {{old('salary',$placeholder_value_employees->salary)=="15000"? 'selected':''}}>15000 Taka</option>
                                       <option value="20000" {{old('salary',$placeholder_value_employees->salary)=="20000"? 'selected':''}}>20000 Taka</option>
                                       <option value="25000" {{old('salary',$placeholder_value_employees->salary)=="25000"? 'selected':''}}>25000 Taka</option>
                                       <option value="30000" {{old('salary',$placeholder_value_employees->salary)=="30000"? 'selected':''}}>30000 Taka</option>
                                       <option value="35000" {{old('salary',$placeholder_value_employees->salary)=="35000"? 'selected':''}}>35000 Taka</option>
                                       <option value="40000" {{old('salary',$placeholder_value_employees->salary)=="40000"? 'selected':''}}>40000 Taka</option>
                                       <option value="45000" {{old('salary',$placeholder_value_employees->salary)=="45000"? 'selected':''}}>45000 Taka</option>
                                       <option value="50000" {{old('salary',$placeholder_value_employees->salary)=="50000"? 'selected':''}}>50000 Taka</option>
                                       <option value="60000" {{old('salary',$placeholder_value_employees->salary)=="60000"? 'selected':''}}>60000 Taka</option>
                                       <option value="70000" {{old('salary',$placeholder_value_employees->salary)=="70000"? 'selected':''}}>70000 Taka</option>
                                       <option value="80000" {{old('salary',$placeholder_value_employees->salary)=="80000"? 'selected':''}}>80000 Taka</option>
                                       <option value="90000" {{old('salary',$placeholder_value_employees->salary)=="90000"? 'selected':''}}>90000 Taka</option>
                                       <option value="100000" {{old('salary',$placeholder_value_employees->salary)=="100000"? 'selected':''}}>100000 Taka</option>
                                       <option value="110000" {{old('salary',$placeholder_value_employees->salary)=="110000"? 'selected':''}}>110000 Taka</option>
                                       <option value="120000" {{old('salary',$placeholder_value_employees->salary)=="120000"? 'selected':''}}>120000 Taka</option>
                                       <option value="130000" {{old('salary',$placeholder_value_employees->salary)=="130000"? 'selected':''}}>130000 Taka</option>
                                       <option value="140000" {{old('salary',$placeholder_value_employees->salary)=="140000"? 'selected':''}}>140000 Taka</option>
                                       <option value="150000" {{old('salary',$placeholder_value_employees->salary)=="150000"? 'selected':''}}>150000 Taka</option>
                                       <option value="160000" {{old('salary',$placeholder_value_employees->salary)=="160000"? 'selected':''}}>160000 Taka</option>
                                       <option value="170000" {{old('salary',$placeholder_value_employees->salary)=="170000"? 'selected':''}}>170000 Taka</option>
                                       <option value="180000" {{old('salary',$placeholder_value_employees->salary)=="180000"? 'selected':''}}>180000 Taka</option>
                                       <option value="190000" {{old('salary',$placeholder_value_employees->salary)=="190000"? 'selected':''}}>190000 Taka</option>
                                       <option value="200000" {{old('salary',$placeholder_value_employees->salary)=="200000"? 'selected':''}}>200000 Taka</option>




                                   </select>
                         </div>
                         <div class="form-group" style="margin-left:20px;">
                                  <label for="exampleInputEmail1">Employees Vacation</label>
                                  <input style="width:500px;" type="text" name="vacation" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_employees->vacation}}" required>
                         </div>

                         <div class="form-group" style="margin-left:20px;">
                                  <label for="exampleInputEmail1">Employees City</label>
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
