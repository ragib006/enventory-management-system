@extends('admin_layout.admin_design')

@section('change')






           <div class="card card-primary" style="width:650px;margin-left:300px;margin-bottom:260px;margin-top:50px;">
             <div class="card-header">
               <h3 class="card-title">Edit Employees Advanced Salary</h3>
             </div>
             <!-- /.card-header -->
             <!-- form start -->



     <form enctype="multipart/form-data" role="form" method="post" action="{{url('/advanced_salary_edit_form_action_route/'.$placeholder_value_employees->id)}}">
         {{ csrf_field() }}
       <div class="card-body">


         <div class="form-group">
                   <label for="exampleFormControlSelect1">Employees Salary</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="emp_id" style="width:500px;">
                       <option value="0">Select</option>

                       @foreach( $all_employee_show_dropdown as $v_show)
                       <option value="{{$v_show->id}}" @if($v_show->id == $placeholder_value_employees->emp_id)selected @endif>{{$v_show->name}}</option>

                       @endforeach



                   </select>
         </div>

         <div class="form-group">
                   <label for="exampleFormControlSelect1">Month</label>
                    <select class="form-control" id="exampleFormControlSelect1"required name="month" style="width:500px;">
                       <option value="no">Select</option>
                       <option value="January" {{old('month',$placeholder_value_employees->month)=="January"? 'selected':''}}>January</option>
                       <option value="February" {{old('month',$placeholder_value_employees->month)=="February"? 'selected':''}}>February</option>
                       <option value="March" {{old('month',$placeholder_value_employees->month)=="March"? 'selected':''}}>March</option>
                       <option value="April" {{old('month',$placeholder_value_employees->month)=="April"? 'selected':''}}>April</option>
                       <option value="May" {{old('month',$placeholder_value_employees->month)=="May"? 'selected':''}}>May</option>
                       <option value="June" {{old('month',$placeholder_value_employees->month)=="June"? 'selected':''}}>June</option>
                       <option value="July" {{old('month',$placeholder_value_employees->month)=="July"? 'selected':''}}>July</option>
                       <option value="August" {{old('month',$placeholder_value_employees->month)=="August"? 'selected':''}}>August</option>
                       <option value="September" {{old('month',$placeholder_value_employees->month)=="September"? 'selected':''}}>September</option>
                       <option value="October" {{old('month',$placeholder_value_employees->month)=="October"? 'selected':''}}>October</option>
                       <option value="November" {{old('month',$placeholder_value_employees->month)=="November"? 'selected':''}}>November</option>
                       <option value="December" {{old('month',$placeholder_value_employees->month)=="December"? 'selected':''}}>December</option>


                   </select>
         </div>



         <div class="form-group">
                  <label for="exampleInputEmail1">Advance Salary</label>
                  <input style="width:500px;" type="number" name="advanced" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_employees->advanced}}" required>
         </div>


         <div style="overflow:hidden;display:block;margin-top:30px;margin-bottom:50px;">
            <label for="show">Select Date</label>
             <input name="year" class="show"type="text" value="{{$placeholder_value_employees->year}}" />

          </div>



               <div class="card-footer" style="margin-top:50px;">


                <button type="submit" class="btn btn-primary" style="margin-left:500px;">Done</button>

               </div>
             </form>
           </div>
</div>

























@endsection
