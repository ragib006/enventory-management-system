<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="{{url('/admin_dashboard')}}" class="brand-link">
    <img src="{{asset('backend')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('backend')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class-->



        <li class="nav-item">
          <a href="{{url('/add_slipper')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
            Slipper
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('/add_employees')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
            Employees
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>


  <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
                Attentdance
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{url('/today_attentdance')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Today Attendance</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('/all_attentdance')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All Attendance</p>
              </a>
            </li>

          </ul>
        </li>





        
        <li class="nav-item">
          <a href="{{url('/add_customer')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
            Customer
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>




<!---
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-chart-pie"></i>
            <p>
              Salary
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">

              <a href="{{url('/add_advancedemployees_salary')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Advance Salary</p>
              </a>


            </li>
            <li class="nav-item">
              <a href="{{url('/pay_salary')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Pay Salary</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{url('/last_month_salary')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Last Month Salary</p>
              </a>
            </li>
          </ul>
        </li>

-->



        <li class="nav-item">
          <a href="{{url('/add_category')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
            Category
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>




      







        <li class="nav-item">
          <a href="{{url('/add_product')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
            Product
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('/add_expand')}}" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
            Expand
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{url('/pos')}}" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
            Pos
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>



                <li class="nav-item has-treeview">
                  <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-table"></i>
                    <p>
                        Order
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="{{url('/all_order')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>All Order</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="{{url('/show_pending_order')}}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pending Order</p>
                      </a>
                    </li>


                  </ul>
                </li>













<!---

        <li class="nav-item">
          <a href="{{url('/setting')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
            Setting
              <span class="right badge badge-danger"></span>
            </p>
          </a>
        </li>

-->

















      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
