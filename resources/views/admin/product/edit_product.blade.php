@extends('admin_layout.admin_design')

@section('change')






           <div class="card card-primary" style="width:650px;margin-left:300px;margin-bottom:260px;margin-top:50px;">
             <div class="card-header">
               <h3 class="card-title">Edit Product</h3>
             </div>
             <!-- /.card-header -->
             <!-- form start -->



     <form enctype="multipart/form-data" role="form" method="post" action="{{url('/product_edit_form_action_route/'.$product_placeholder_value->id)}}">
         {{ csrf_field() }}
       <div class="card-body">
         <div class="form-group">




           <label for="exampleInputEmail1">Product Name</label>
         <input style="width:500px;" type="text" name="product_name" class="form-control" id="exampleInputEmail1" value="{{$product_placeholder_value->product_name}}" required>
         </div>


                    <div class="form-group">
                              <label for="exampleFormControlSelect1">Select Category</label>
                               <select class="form-control" id="exampleFormControlSelect1" name="cat_id" style="width:500px;">
                                  <option value="0">Select</option>

                                 @foreach($category_dropdown as $v_show)

                                  <option value="{{$v_show->id}}" style="font-weight:bold;color:green;" @if($v_show->id == $product_placeholder_value->cat_id)selected @endif>&nbsp;&nbsp;{{$v_show->cat_name}}</option>

                                     @foreach($v_show['sub_categories'] as $sub_caategory)
                                      <option value="{{$sub_caategory->id}}" style="color:blue;font-weight:bold;" @if($sub_caategory->id == $product_placeholder_value->cat_id)selected @endif>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$sub_caategory->cat_name}}</option>
                                    @endforeach

                                @endforeach


                              </select>
                    </div>


                    <div class="form-group">
                              <label for="exampleFormControlSelect1">Select Slipper</label>
                               <select class="form-control" id="exampleFormControlSelect1" name="slipper_id" style="width:500px;">
                                  <option value="0">Select</option>

                                 @foreach($slipper_dropdown as $v_show)

                                  <option value="{{$v_show->id}}" style="font-weight:bold;color:blue;" @if($v_show->id == $product_placeholder_value->slipper_id)selected @endif>&nbsp;&nbsp;{{$v_show->name}}</option>

                                 @endforeach
                              </select>
                    </div>

                    <div class="form-group">
                             <label for="exampleInputEmail1">Product Code</label>
                             <input style="width:500px;" type="text" name="product_code" class="form-control" id="exampleInputEmail1" value="{{$product_placeholder_value->product_code}}" required>
                    </div>


                    <div class="form-group">
                             <label for="exampleInputEmail1">Product Quantity</label>
                             <input style="width:500px;" type="number" name="product_quantity" class="form-control" id="exampleInputEmail1" value="{{$product_placeholder_value->product_quantity}}"  required>
                    </div>

                    <div style="overflow:hidden;display:block;margin-top:30px;margin-bottom:50px;">
                       <label for="show">Buy Date</label>
                        <input name="product_buy_date" class="show"type="text" value="{{$product_placeholder_value->product_buy_date}}" />

                     </div>


                     <div class="form-group" style="width:500px;">
                             <label for="exampleInputFile">Product Image</label><br>
                                   <img id="image" style="margin-bottom:10px;" src="#">
                                       <div class="input-group">
                                           <div class="custom-file">


                               <input type="file" class="custom-file-input"  name="product_image" accept="image/*" class="upload" onchange="readURL(this);">
                               <input type="hidden" name="current_image" value="{{$product_placeholder_value->product_image}}">
                               <label class="custom-file-label" for="exampleInputFile">Choose file</label>

                                 </div>


                                 <div style="padding-left:20px;margin-top:-7px;">
                                      <img src="{{asset('/images/product/large/'.$product_placeholder_value->product_image)}}" style="width:50px; height:50px;" alt="" />

                                   </div>


                                                 <div class="input-group-append">

                                                 </div>
                                               </div>
                                             </div>





                            <div class="form-group">
                                     <label for="exampleInputEmail1">Product Buying Price</label>
                                     <input style="width:500px;" type="number" name="buying_price" class="form-control" id="exampleInputEmail1" value="{{$product_placeholder_value->buying_price}}" required>
                            </div>

                            <div class="form-group">
                                     <label for="exampleInputEmail1">Product Selling Price</label>
                                     <input style="width:500px;" type="number" name="selling_price" class="form-control" id="exampleInputEmail1" value="{{$product_placeholder_value->selling_price}}" required>
                            </div>



                      <div class="form-group">
                           <label for="exampleInputEmail1">Product Url</label>
                                 <input style="width:500px;" type="text" name="product_url" class="form-control" id="exampleInputEmail1" value="{{$product_placeholder_value->product_url}}" required>
                           </div>




                             <div style="overflow:hidden;display:block;margin-top:30px;margin-bottom:50px;">
                                <label for="show">Expire Date</label>
                                <input name="product_expire_date" class="show"type="text" value="{{$product_placeholder_value->product_expire_date}}" />

                              </div>








               <!-- /.card-body -->

               <div class="card-footer" style="margin-top:50px;">


                <button type="submit" class="btn btn-primary" style="margin-left:500px;">Done</button>

               </div>


             </form>
           </div>
</div>

























@endsection
