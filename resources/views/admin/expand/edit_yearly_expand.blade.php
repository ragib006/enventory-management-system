@extends('admin_layout.admin_design')

@section('change')






           <div class="card card-primary" style="width:650px;margin-left:300px;margin-bottom:260px;margin-top:50px;">
             <div class="card-header">
               <h3 class="card-title">Edit Yearly Expand Information</h3>
             </div>
             <!-- /.card-header -->
             <!-- form start -->



     <form enctype="multipart/form-data" role="form" method="post" action="{{url('/expand_yearlyedit_form_action_route/'.$placeholder_value_expand->id)}}">
         {{ csrf_field() }}
       <div class="card-body">



                                   <div class="form-group">
                                            <label for="exampleInputEmail1">Expand Amount</label>
                                            <input style="width:500px;" type="number" name="expend_amount" class="form-control" id="exampleInputEmail1" value="{{$placeholder_value_expand->expend_amount}}" required>
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
