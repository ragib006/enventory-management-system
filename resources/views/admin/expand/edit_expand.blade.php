@extends('admin_layout.admin_design')

@section('change')






           <div class="card card-primary" style="width:650px;margin-left:300px;margin-bottom:260px;margin-top:50px;">
             <div class="card-header">
               <h3 class="card-title">Edit Expand Information</h3>
             </div>
             <!-- /.card-header -->
             <!-- form start -->



     <form enctype="multipart/form-data" role="form" method="post" action="{{url('/expand_edit_form_action_route/'.$placeholder_value_expand->id)}}">
         {{ csrf_field() }}
       <div class="card-body">



                                   <div class="form-group">
                                            <label for="exampleInputEmail1">Expand Amount</label>
                                            <input style="width:500px;" type="number" name="expend_amount" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_expand->expend_amount}}" required>
                                   </div>



         <div class="form-group">
                   <label for="exampleFormControlSelect1">Month</label>
                    <select class="form-control" id="exampleFormControlSelect1"required name="expend_month" style="width:500px;">
                       <option value="no">Select</option>
                       <option value="January" {{old('expend_month',$placeholder_value_expand->expend_month)=="January"? 'selected':''}}>January</option>
                       <option value="February" {{old('expend_month',$placeholder_value_expand->expend_month)=="February"? 'selected':''}}>February</option>
                       <option value="March" {{old('expend_month',$placeholder_value_expand->expend_month)=="March"? 'selected':''}}>March</option>
                       <option value="April" {{old('expend_month',$placeholder_value_expand->expend_month)=="April"? 'selected':''}}>April</option>
                       <option value="May" {{old('expend_month',$placeholder_value_expand->expend_month)=="May"? 'selected':''}}>May</option>
                       <option value="June" {{old('expend_month',$placeholder_value_expand->expend_month)=="June"? 'selected':''}}>June</option>
                       <option value="July" {{old('expend_month',$placeholder_value_expand->expend_month)=="July"? 'selected':''}}>July</option>
                       <option value="August" {{old('expend_month',$placeholder_value_expand->expend_month)=="August"? 'selected':''}}>August</option>
                       <option value="September" {{old('expend_month',$placeholder_value_expand->expend_month)=="September"? 'selected':''}}>September</option>
                       <option value="October" {{old('expend_month',$placeholder_value_expand->expend_month)=="October"? 'selected':''}}>October</option>
                       <option value="November" {{old('expend_month',$placeholder_value_expand->expend_month)=="November"? 'selected':''}}>November</option>
                       <option value="December" {{old('expend_month',$placeholder_value_expand->expend_month)=="December"? 'selected':''}}>December</option>


                   </select>
         </div>



         <div style="overflow:hidden;display:block;margin-top:30px;margin-bottom:50px;">
            <label for="show">Expend Date</label>
             <input name="expend_date" class="show"type="text" value="{{$placeholder_value_expand->expend_date}}"  />

          </div>

          <div class="form-group">
                   <label for="exampleInputEmail1">Expand Detail</label>

                   <textarea style="width:500px;"  name="expend_details" class="form-control" id="exampleInputEmail1" required>{{$placeholder_value_expand->expend_details}}</textarea>
          </div>


               <div class="card-footer" style="margin-top:50px;">


                <button type="submit" class="btn btn-primary" style="margin-left:500px;">Done</button>

               </div>
             </form>
           </div>
</div>

























@endsection
