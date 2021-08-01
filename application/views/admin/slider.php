<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?php echo base_url(); ?>assets/adminassets/dist/img/sree.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">BILL-CONNECT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url(); ?>assets/adminassets/dist/img/admin1.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin Panel</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           
			<li class="nav-item has-treeview <?php if($fun=='admin_add_dept' || $fun=='dept_edit' || $fun=='admin_dept_view'){echo "menu-open";} ?>">
            <a href="#" class="nav-link <?php if($fun=='admin_add_dept' || $fun=='admin_dept_view'|| $fun=='dept_edit'){echo "active";} ?>">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                 Department
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: <?php if($fun=='admin_add_dept' || $fun=='admin_dept_view'|| $fun=='dept_edit'){echo "block";} ?>">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>/Bill_connect/admin_add_dept" class="nav-link <?php if($fun=='admin_add_dept'){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Department</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>/Bill_connect/admin_dept_view" class="nav-link <?php if($fun=='admin_dept_view'|| $fun=='dept_edit'){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Department</p>
                </a>
              </li>
            </ul>
          </li>
			<li class="nav-item has-treeview <?php if($fun=='admin_user_view'){echo "menu-open";} ?>">
            <a href="#" class="nav-link <?php if($fun=='admin_user_view'){echo "active";} ?>">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Manage User
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: <?php if($fun=='admin_user_view'){echo "block";} ?>">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>/Bill_connect/admin_user_view" class="nav-link <?php if($fun=='admin_user_view'){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View User</p>
                </a>
              </li>
              
            </ul>
          </li>
			<li class="nav-item has-treeview <?php if($fun=='feedback' || $fun=='old_feedback'){echo "menu-open";} ?>">
            <a href="#" class="nav-link <?php if($fun=='feedback' || $fun=='old_feedback'){echo "active";} ?>">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                 Feedback Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: <?php if($fun=='feedback' || $fun=='old_feedback'){echo "block";} ?>">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>/Bill_connect/feedback" class="nav-link <?php if($fun=='feedback'){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read Feedback</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>/Bill_connect/old_feedback" class="nav-link <?php if($fun=='old_feedback'){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Old Feedback</p>
                </a>
              </li>
            </ul>
          </li>
          
          
          
          
          
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>