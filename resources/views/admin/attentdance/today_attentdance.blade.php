
@extends('admin_layout.admin_design')

@section('change')





  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
        <!--    <h1>DataTables</h1>-->

        <p class="login-box-msg" style="">


        @if(Session::has('flash_message_error'))


        <div class="alert alert-success alert-error" style="width:400px;">

        <button type="button" class="close" data-dismiss="alert">×</button>

        <strong>{!! session('flash_message_error') !!}</strong>

        </div>

        @endif



        </p>



          </div>






































        </div>
      </div><!-- /.container-fluid -->
    </section>





<!---- add category form a all section show koraci ---  >

<!---- show all category in add category dropdown  ---  >






    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">



            <div class="card">



              <div class="card-header">
                <h3 class="card-title">Today Attentdance</h3>
                 <center style="padding:0px;margin:0px;out-line:0px;">

                  <h4>Date : {{date("d-m-y")}}</h4>

                 </center>

              </div>
















              <form enctype="multipart/form-data" role="form" method="post" action="{{url('/today_attentdence_form_action_route')}}">
                                      {{ csrf_field() }}

              <div class="card-body">
                <table id="section" class="table table-bordered table-striped">
                  <thead>
                  <tr>

                     <th style="text-align:center;">Name</th>


                     <th style="text-align:center;">Phone</th>
                     <th style="text-align:center;">City</th>
                     <th style="text-align:center;">Image</th>




                    <th style="text-align:center;">Addentdance</th>

                    <!-- <th style="text-align:center;">Action</th> -->
                  </tr>
                  </thead>



                  <tbody>

                     @foreach($all_employees as $v_show)

                  <tr>


                    <td style="text-align:center;padding-top:45px;">{{$v_show->name}}</td>

                    <td style="text-align:center;padding-top:45px;">{{$v_show->phone}}</td>
                    <td style="text-align:center;padding-top:45px;">{{$v_show->city}}</td>

                   <td>
                     <center>

                     <img src="{{asset('/images/employees/large/'.$v_show->photo)}}" style="width:100px; height:100px;border-radius:2px;" alt="" />

                      </center>
                   </td>




                  <input type="hidden" name="att_date" value="{{date("d-m-y")}}"/>
                    <input type="hidden" name="att_year" value="{{date("Y")}}"/>
                      <input type="hidden" name="att_month" value="{{date("F")}}"/>
                      

                       <input type="hidden" name="user_id[]" value="{{$v_show->id}}"/>

                  <td style="text-align:center;padding-top:45px;">

                <input type="radio" name="attentdance[{{$v_show->id}}]" value="1"/>Yes
                <input type="radio" name="attentdance[{{$v_show->id}}]" value="0"/>No



                  </td>



                  </tr>
                  @endforeach

                  </tbody>









                </table>


                  <button type="submit" class="btn btn-info">
                    Todays Attentdance
                  </button>


              </div>

            </form>


              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>



































@endsection
