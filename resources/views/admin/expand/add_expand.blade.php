@extends('admin_layout.admin_design')

@section('change')




<div  style="margin-left:300px;">
<p class="login-box-msg">


@if(Session::has('flash_message_error'))


<div class="alert alert-success alert-error" style="width:400px;">

<button type="button" class="close" data-dismiss="alert">×</button>

<strong>{!! session('flash_message_error') !!}</strong>

</div>

@endif



</p>
</div>












           <div class="card card-primary" style="width:750px;margin-left:300px;margin-bottom:260px;margin-top:50px;">



             <div class="card-header">
               <div style="width:250px;float:left;">
               <h3 class="card-title" style="margin-top:7px;">Add Expend</h3>
             </div>

             <div style="float:left;">
              <a href="{{url('/today_expand')}}" class="btn btn-success">Today Expand</a>
              <a href="{{url('/monthly_expand')}}" class="btn btn-danger">This Month Expand</a>
                <a href="{{url('/yearly_expand')}}" class="btn btn-warning">This Year Expand</a>
             </div>



             </div>


             <form enctype="multipart/form-data" role="form" method="post" action="{{url('/add_expand_form_action_route')}}">

                 {{ csrf_field() }}
               <div class="card-body">
                 <div class="form-group">


                   <label for="exampleInputEmail1">Expend Amount</label>
                 <input style="width:500px;" type="number" name="expend_amount" class="form-control" id="exampleInputEmail1" placeholder="Enter expend amount" required>
                 </div>



                 <div class="form-group">

                          <input style="width:500px;" type="hidden" name="expend_month" class="form-control" id="exampleInputEmail1" value="{{ date("F")}}" required>
                 </div>

                 <div class="form-group">

                          <input style="width:500px;" type="hidden" name="expend_date" class="form-control" id="exampleInputEmail1" value="{{ date("d-m-y")}}" required>
                 </div>



                 <div class="form-group">

                          <input style="width:500px;" type="hidden" name="expend_year" class="form-control" id="exampleInputEmail1" value="{{ date("Y") }}" required>

                 </div>





                 <div class="form-group">
                          <label for="exampleInputEmail1">Expend Description</label>



                          <textarea style="width:500px;" type="text" name="expend_details" class="form-control" id="exampleInputEmail1" placeholder="Enter expend details" required></textarea>
                 </div

           </div>





                       <div class="card-footer" style="margin-top:50px;">


                        <button type="submit" class="btn btn-primary" style="margin-left:500px;">Done</button>

                       </div>


                     </form>




           </div>


 </div>



@endsection
