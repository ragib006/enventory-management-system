
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
                <h3 class="card-title">All Category</h3>




                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left:950px;">
                      Add Category
                    </button>


                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content" style="width:550px;">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">



  <form enctype="multipart/form-data" role="form" method="post" action="{{url('/add_category_form_action_route')}}">
                                            {{ csrf_field() }}


           <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input style="width:500px;" type="text" name="cat_name" class="form-control" id="exampleInputEmail1" placeholder="Enter employees name" required>
           </div>



           <div class="form-group">
                     <label for="exampleFormControlSelect1">Parent Categoty</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="parent_id" style="width:500px;">
                         <option value="0">Select</option>


                          @foreach($show_main_category_dropdown as $v_category)

                         <option value="{{ $v_category->id }}">{{$v_category->cat_name}}</option>

                          @endforeach


                     </select>
           </div>

           <div class="form-group">
                    <label for="exampleInputEmail1">Categoty Url</label>
                    <input style="width:500px;" type="text" name="cat_url" class="form-control" id="exampleInputEmail1" placeholder="Enter employees address" required>
           </div>

           <div class="form-group">
                    <label for="exampleInputEmail1">Category Description</label>



                    <textarea style="width:500px;" type="text" name="cat_description" class="form-control" id="exampleInputEmail1" placeholder="Enter employees address" required></textarea>
           </div>












    <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Done</button>
    </div>
 </form>

                        </div>
                      </div>
                    </div>

                   </div>




              </div>
















              <!-- /.card-header -->
              <div class="card-body" >
                <table id="section" class="table table-bordered table-striped">
                  <thead>
                  <tr>

                     <th style="text-align:center;">Category Name</th>
                       <th style="text-align:center;">Parent Id</th>
                        <th style="text-align:center;">Category Informtion</th>
                     <th style="text-align:center;">Category Url</th>




                    <th style="text-align:center;">Status</th>
                    <th style="text-align:center;">ON/OFF</th>
                    <th style="text-align:center;">Action</th>
                  </tr>
                  </thead>


                  <tbody>

                     @foreach($show_all_category as $v_show)

                     @if(!isset($v_show->patent_category->cat_name))
                      <?php $parent = "main category"?>
                    @else
                  <?php  $parent =$v_show->patent_category->cat_name; ?>

                   @endif

        <tr>

                  <tr>


                    <td style="text-align:center;padding-top:45px;">{{$v_show->cat_name}}</td>
                    <td style="text-align:center;padding-top:45px;">{{$v_show->parent_id }}</td>
                      <td style="text-align:center;padding-top:45px;color:blue;">{{ $parent }}</td>
                    <td style="text-align:center;padding-top:45px;">{{$v_show->cat_url}}</td>









          <td style="">


          @if($v_show->cat_status==1)

           <span style="margin-top:33px;display:block;text-align:center;" class="label label-success">{{'Active'}}</span>

          @else

            <span style="margin-top:33px;display:block; text-align:center;"  class="label label-danger" >{{'Not Active'}}</span>

          @endif



           </td>

           <td style="">

          @if($v_show->cat_status==1)

          <a style="margin-top:30px;margin-left:20px;" class="btn btn-primary btn-sm"  href="{{URL::to('/active_category_unactive/'.$v_show->id)}}">ON</a>

           @else

         <a style="margin-top:30px;margin-left:20px;" class="btn btn-success btn-sm" href="{{URL::to('/unactive_category_active/'.$v_show->id)}}">OFF</a>

          @endif



           </td>

       <td>





  <a class="btn btn-warning btn-sm" style="margin-top:30px;margin-left:30px;"  href="{{URL::to('/edit_category_page_show/'.$v_show->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
  <a class="btn btn-danger btn-sm" style="margin-top:30px;" id="delate" href="{{URL::to('/category_delate_route/'.$v_show->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>














                    </td>
                  </tr>
                  @endforeach

                  </tbody>



                </table>
              </div>
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
