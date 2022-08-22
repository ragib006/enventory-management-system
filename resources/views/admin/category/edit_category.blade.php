@extends('admin_layout.admin_design')

@section('change')






           <div class="card card-primary" style="width:650px;margin-left:300px;margin-bottom:260px;margin-top:50px;">
             <div class="card-header">
               <h3 class="card-title">Edit Category</h3>
             </div>
             <!-- /.card-header -->
             <!-- form start -->



     <form enctype="multipart/form-data" role="form" method="post" action="{{url('/category_edit_form_action_route/'.$category_placeholder_value->id)}}">
         {{ csrf_field() }}
       <div class="card-body">
         <div class="form-group">

           <label for="exampleInputEmail1">category Name</label>
         <input style="width:500px;" type="text" name="cat_name" class="form-control" id="exampleInputEmail1" value="{{$category_placeholder_value->cat_name}}" required>
         </div>

         <div class="form-group">
                   <label for="exampleFormControlSelect1">Parent Categoty</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="parent_id" style="width:500px;">
                       <option value="0">Select</option>


                        @foreach($show_main_category_dropdown as $v_category)

                       <option value="{{ $v_category->id }}" @if($v_category->id == $category_placeholder_value->id)selected @endif>{{$v_category->cat_name}}</option>

                        @endforeach


                   </select>
         </div>

         <div class="form-group">
                  <label for="exampleInputEmail1">Categoty Url</label>
                  <input style="width:500px;" type="text" name="cat_url" class="form-control" id="exampleInputEmail1" value="{{$category_placeholder_value->cat_url}}" required>
         </div>

         <div class="form-group">
                  <label for="exampleInputEmail1">Category Description</label>



                  <textarea style="width:500px;" type="text" name="cat_description" class="form-control" id="exampleInputEmail1" placeholder="Enter employees address" required> {{$category_placeholder_value->cat_url}}</textarea>
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
