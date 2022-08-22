
@extends('admin_layout.admin_design')

@section('change')


<div class="maaa" style="width:500px;margin-left:400px;margin-bottom:300px;margin-top:50px;">
<div class="card card-primary card-outline">
             <div class="card-body box-profile">
               <div class="text-center">
                 <!-- <img class="profile-user-img img-fluid img-circle"
                      src="{{asset('/backend')}}/dist/img/user4-128x128.jpg" -->

              <img src="{{asset('/images/employees/large/'.$employees_information->photo)}}" style="width:150px; height:150px;border-radius:10px;" alt="" />
                      <!-- alt="User profile picture"> -->
               </div>

               <h3 class="profile-username text-center text-success">{{$employees_information->name}}</h3>

               <p class=" text-center text-primary">{{$employees_information->email}}</p>
               <p class="text-danger text-center">{{$employees_information->phone}}</p>

               <ul class="list-group list-group-unbordered mb-3">
                 <li class="list-group-item">
                   <b>Address</b> <a class="float-right">{{$employees_information->address}}</a>
                 </li>
                 <li class="list-group-item">
                   <b>Exprience</b> <a class="float-right">{{$employees_information->exprience}} years</a>
                 </li>

                 <li class="list-group-item">
                   <b>Salary</b> <a class="float-right">{{$employees_information->salary}} TK</a>
                 </li>
                 <li class="list-group-item">
                   <b>Vacation</b> <a class="float-right">{{$employees_information->vacation}} Days</a>
                 </li>
                 <li class="list-group-item">
                   <b>Nid</b> <a class="float-right">{{$employees_information->nid}}</a>
                 </li>
                 <li class="list-group-item">
                   <b>City</b> <a class="float-right">{{$employees_information->city}}</a>
                 </li>
                 <li class="list-group-item">

                     <div style="margin-top:10px;">

                                    @if(empty($today_attendance))

                                 <b>Today Attendance</b> <a class="float-right" style="margin-bottom:-15px;"><p class="bg-success"><span style="padding:5px 5px">{{'Addendance not Taken today'}}</span></p></a>

                                     @elseif($today_attendance->attentdance==1)


                                      <b>Today Attendance</b> <a class="float-right"><p class="bg-primary"><span style="padding:5px 5px">{{'Present'}}</span></p></a>

                                     @else


                                       <b>Today Attendance</b> <a class="float-right"><p class="bg-danger"><span style="padding:5px 5px">{{'Absent'}}</span></p></a>

                                     @endif

                              </div>




                 </li>


                 <li class="list-group-item">

                   <b><span style="color:blue">{{date("F")}}</span> Total Attentdance</b> <a class="float-right">{{$this_month_attendances}}</a>

                 </li>

                 <li class="list-group-item">
                   <b>Total Attentdance</b> <a class="float-right">{{$total_attendance}}</a>
                 </li>

                 <li class="list-group-item">
                   <b>Total Session</b> <a class="float-right">{{$total_class}} Days</a>
                 </li>
               </ul>

              
             </div>
             <!-- /.card-body -->
           </div>
           </div>

























@endsection
