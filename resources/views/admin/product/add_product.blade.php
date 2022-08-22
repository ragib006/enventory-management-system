
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
                <h3 class="card-title">All Product</h3>




                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-left:950px;">
                      Add Product
                    </button>


                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content" style="width:550px;">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">


  <form enctype="multipart/form-data" role="form" method="post" action="{{url('/add_product_form_action_route')}}">
                          {{ csrf_field() }}


           <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input style="width:500px;" type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter employees name" required>
           </div>

           <div class="form-group">
                     <label for="exampleFormControlSelect1">Select Category</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="cat_id" style="width:500px;">
                         <option value="0">Select</option>

                        @foreach($category_dropdown as $v_show)

                         <option value="{{$v_show->id}}" style="font-weight:bold;color:green;">&nbsp;&nbsp;{{$v_show->cat_name}}</option>

                            @foreach($v_show['sub_categories'] as $sub_caategory)
                             <option value="{{$sub_caategory->id}}" style="color:blue;font-weight:bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$sub_caategory->cat_name}}</option>
                           @endforeach

                       @endforeach


                     </select>
           </div>


           <div class="form-group">
                     <label for="exampleFormControlSelect1">Select Slipper</label>
                      <select class="form-control" id="exampleFormControlSelect1" name="slipper_id" style="width:500px;">
                         <option value="0">Select</option>

                        @foreach($slipper_dropdown as $v_show)

                         <option value="{{$v_show->id}}" style="font-weight:bold;color:green;">&nbsp;&nbsp;{{$v_show->name}}</option>

                        @endforeach
                     </select>
           </div>

           <div class="form-group">
                    <label for="exampleInputEmail1">Product Code</label>
                    <input style="width:500px;" type="text" name="product_code" class="form-control" id="exampleInputEmail1" placeholder="Enter employees address" required>
           </div>

           <div class="form-group">
                    <label for="exampleInputEmail1">Product Quantity</label>
                    <input style="width:500px;" type="number" name="product_quantity" class="form-control" id="exampleInputEmail1" placeholder="Enter employees address" required>
           </div>

           <div style="overflow:hidden;display:block;margin-top:30px;margin-bottom:50px;">
              <label for="show">Buy Date</label>
               <input name="product_buy_date" class="show"type="text" />

            </div>

           <div class="form-group" style="width:500px;">
                     <label for="exampleInputFile">Product Image</label><br>
                       <img id="image" style="margin-bottom:10px;" src="#">
                     <div class="input-group">
                       <div class="custom-file">

                         <input type="file" class="custom-file-input"  required  name="product_image" accept="image/*" class="upload" required onchange="readURL(this);">
                         <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                       </div>
                       <div class="input-group-append">

                       </div>
                     </div>
                   </div>


                   <div class="form-group">
                            <label for="exampleInputEmail1">Product Buying Price</label>
                            <input style="width:500px;" type="number" name="buying_price" class="form-control" id="exampleInputEmail1" placeholder="Enter employees address" required>
                   </div>

                   <div class="form-group">
                            <label for="exampleInputEmail1">Product Selling Price Price</label>
                            <input style="width:500px;" type="number" name="selling_price" class="form-control" id="exampleInputEmail1" placeholder="Enter employees address" required>
                   </div>



             <div class="form-group">
                  <label for="exampleInputEmail1">Product Url</label>
                        <input style="width:500px;" type="text" name="product_url" class="form-control" id="exampleInputEmail1" placeholder="Enter employees address" required>
                  </div>




                    <div style="overflow:hidden;display:block;margin-top:30px;margin-bottom:50px;">
                       <label for="show">Expire Date</label>
                       <input name="product_expire_date" class="show"type="text" />

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

                     <th style="text-align:center;">Name</th>
                       <th style="text-align:center;">Category</th>
                     <th style="text-align:center;">Supplyer</th>


                     <th style="text-align:center;">Bye</th>
                     <th style="text-align:center;">Sell</th>
                     <th style="text-align:center;">Image</th>
                     <th style="text-align:center;">Quantity</th>


                    <th style="text-align:center;">Status</th>
                    <th style="text-align:center;">ON/OFF</th>
                    <th style="text-align:center;">Action</th>
                  </tr>
                  </thead>


                  <tbody>

                     @foreach($all_product as $v_show)

                  <tr>


                    <td style="text-align:center;padding-top:45px;">{{$v_show->product_name}}</td>
                    <td style="text-align:center;padding-top:45px;color:blue;">{{$v_show->category_name->cat_name}}</td>
                    <td style="text-align:center;padding-top:45px;">{{$v_show->slipper_name->name}}</td>
                    <td style="text-align:center;padding-top:45px;">{{$v_show->buying_price}} TK</td>
                    <td style="text-align:center;padding-top:45px;">{{$v_show->selling_price }} TK</td>
                    <td><img src="{{asset('/images/product/large/'.$v_show->product_image)}}" style="width:100px; height:100px;border-radius:2px;" alt="" /></td>
                    <td style="width:50px;text-align:center;padding-top:45px;">{{$v_show->product_quantity}}</td>




          <td style="">


          @if($v_show->product_status==1)

           <span style="margin-top:33px;display:block;text-align:center;color:blue;" class="label label-success">{{'Active'}}</span>

          @else

            <span style="margin-top:33px;display:block; text-align:center;"  class="label label-danger" >{{'Not Active'}}</span>

          @endif



           </td>

           <td style="">

          @if($v_show->product_status==1)

          <a style="margin-top:30px;margin-left:20px;" class="btn btn-primary btn-sm"  href="{{URL::to('/active_product_unactive/'.$v_show->id)}}">ON</a>

           @else

         <a style="margin-top:30px;margin-left:20px;" class="btn btn-success btn-sm" href="{{URL::to('/unactive_product_active/'.$v_show->id)}}">OFF</a>

          @endif



           </td>

       <td>




    <a href="#myModal2{{$v_show->id}}" style="margin-top:30px;" data-toggle="modal" class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
  <a class="btn btn-warning btn-sm" style="margin-top:30px;"  href="{{URL::to('/product_edit_route/'.$v_show->id)}}"><i class="fa fa-edit" aria-hidden="true"></i></a>
  <a class="btn btn-danger btn-sm" style="margin-top:30px;" id="delate" href="{{URL::to('/product_delate_route/'.$v_show->id)}}"><i class="fa fa-trash" aria-hidden="true"></i></a>















            <div id="myModal2{{$v_show->id}}" class="modal hide"style="">
              <div style="width:50%;margin-left:30%;margin-top:5%;">
                       <div class="modal-header" style="background:white;">
                         <h2 style="font-weight:bold;">{{$v_show->product_name}}</h2>
                         <button data-dismiss="modal" class="close" type="button">×</button>

                       </div>
                       <div class="modal-body" style="background:white;">

                          <p><img src="{{asset('/images/product/large/'.$v_show->product_image)}}" style="width:250px; height:250px;border-radius:2px;" alt="" /></p>
                         <span style="font-size:18px;font-weight:bold;color:black;font-family:Arial;">Product Name :</span>  <span style="font-size:18px;color:blue;">{{$v_show->product_name}}</span><br>
                         <span style="font-size:18px;font-weight:bold;color:black;font-family:Arial;">Category Name :</span>  <span style="font-size:18px;color:blue;">{{$v_show->category_name->cat_name}}</span></br>
                         <span style="font-size:18px;font-weight:bold;color:black;font-family:Arial;">Supplyer Name :</span>  <span style="font-size:18px;color:blue;">{{$v_show->slipper_name->name}}</span><br>
                         <span style="font-size:18px;font-weight:bold;color:black;font-family:Arial;">Product Code :</span>  <span style="font-size:18px;color:blue;">{{$v_show->product_code}}</span></br>
                         <span style="font-size:18px;font-weight:bold;color:black;font-family:Arial;">Buy Date :</span>  <span style="font-size:18px;color:blue;">{{$v_show->product_buy_date}}</span><br>
                         <span style="font-size:18px;font-weight:bold;color:black;font-family:Arial;">Expire Date :</span>  <span style="font-size:18px;color:blue;">{{$v_show->product_expire_date}}</span></br>
                         <span style="font-size:18px;font-weight:bold;color:black;font-family:Arial;">Product Url :</span>  <span style="font-size:18px;color:blue;">{{$v_show->product_url}}</span><br>
                         <span style="font-size:18px;font-weight:bold;color:black;font-family:Arial;">Buying Price :</span>  <span style="font-size:18px;color:blue;">{{$v_show->buying_price}}</span></br>
                         <span style="font-size:18px;font-weight:bold;color:black;font-family:Arial;">Selling Price :</span>  <span style="font-size:18px;color:blue;">{{$v_show->selling_price}}</span><br>
                        <span style="font-size:18px;font-weight:bold;color:black;font-family:Arial;">Profite :</span>  <span style="font-size:18px;color:blue;">{{$v_show->selling_price-$v_show->buying_price}}</span><br>


                       </div>
                       <div class="modal-footer"><a data-dismiss="modal" class="btn btn-inverse" href="#">Cancel</a> </div>
                     </div>

                </div>





















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
