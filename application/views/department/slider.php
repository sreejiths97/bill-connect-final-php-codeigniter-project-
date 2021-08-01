<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url(); ?>assets/adminassets/dist/img/sree.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">BILL-CONNECT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="#" class="d-block">
			  <?php echo  $dept_name; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
			<li class="nav-item has-treeview <?php if($fun=='generate_bill' || $fun=='view_bill'){echo "menu-open";} ?>">
            <a href="#" class="nav-link <?php if($fun=='generate_bill' || $fun=='view_bill'){echo "active";} ?>">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                 Manage Bill
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: <?php if($fun=='generate_bill' || $fun=='view_bill'){echo "block";} ?>">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>/department/generate_bill" class="nav-link <?php if($fun=='generate_bill'){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Generate Bill</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>/department/view_bill" class="nav-link <?php if($fun=='view_bill'){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Bill</p>
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