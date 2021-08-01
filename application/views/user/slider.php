<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url(); ?>assets/adminassets/dist/img/sree.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light" >BILL-CONNECT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info" >
          <a href="#" class="d-block" style="align-content: center"><?php
                 echo "<center>";
				echo $name;
					?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
			<li class="nav-item has-treeview <?php if($fun=='profile' || $fun=='edit_profile'){echo "menu-open";} ?>">
            <a href="#" class="nav-link <?php if($fun=='profile' || $fun=='edit_profile'){echo "active";} ?>">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                My Profile
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: <?php if($fun=='profile' || $fun=='edit_profile'){echo "block";} ?>">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>/user/profile" class="nav-link <?php if($fun=='profile'){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Personel Details</p>
                </a>
              </li>
              
            </ul>
				<ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>/user/edit_profile" class="nav-link <?php if($fun=='edit_profile'){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Edit Personel Details</p>
                </a>
              </li>
              
            </ul>
          </li>
			<li class="nav-item has-treeview <?php if($fun=='add_card' || $fun=='view_card'){echo "menu-open";} ?>">
            <a href="#" class="nav-link <?php if($fun=='add_card' || $fun=='view_card'){echo "active";} ?>">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Payment Deatils
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: <?php if($fun=='add_card' || $fun=='view_card'){echo "block";} ?>">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>/user/add_card" class="nav-link <?php if($fun=='add_card'){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Card Deatils</p>
                </a>
              </li>
              
            </ul>
				<ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>/user/view_card" class="nav-link <?php if($fun=='view_card'){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Card Deatils</p>
                </a>
              </li>
              
            </ul>
          </li>
			<li class="nav-item has-treeview <?php if($fun=='add_dept' || $fun=='dept_view'){echo "menu-open";} ?>">
            <a href="#" class="nav-link <?php if($fun=='add_dept' || $fun=='dept_view'){echo "active";} ?>">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Department
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: <?php if($fun=='add_dept' || $fun=='dept_view'){echo "block";} ?>">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>/user/add_dept" class="nav-link <?php if($fun=='add_dept'){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Department</p>
                </a>
              </li>
              
            </ul>
				<ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>/user/dept_view" class="nav-link <?php if($fun=='dept_view'){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Deparment List</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview <?php if($fun=='bill_payment' || $fun=='bill_view'){echo "menu-open";} ?>">
            <a href="#" class="nav-link  <?php if($fun=='bill_payment' || $fun=='bill_view'){echo "active";} ?>">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Manage Bill
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display:  <?php if($fun=='bill_payment' || $fun=='bill_view'){echo "block";} ?>">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>/user/bill_payment" class="nav-link  <?php if($fun=='bill_payment'){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bill Payment</p>
                </a>
              </li>
              
            </ul>
				<ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>/user/bill_view" class="nav-link  <?php if($fun=='bill_view'){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bill Details</p>
                </a>
              </li>
              
            </ul>
          </li><li class="nav-item has-treeview <?php if($fun=='e_book' || $fun=='e_book_view' || $fun=='e_book_barchart'){echo "menu-open";} ?>">
            <a href="#" class="nav-link <?php if($fun=='e_book' || $fun=='e_book_view' || $fun=='e_book_barchart'){echo "active";} ?>">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                E-Book Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: <?php if($fun=='e_book' || $fun=='e_book_view' || $fun=='e_book_barchart'){echo "block";} ?>">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>/user/e_book" class="nav-link <?php if($fun=='e_book'){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Daily Expenses </p>
                </a>
              </li>
              
            </ul>
				<ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo site_url(); ?>/user/e_book_view" class="nav-link <?php if($fun=='e_book_view' || $fun=='e_book_barchart'){echo "active";} ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Expense Book</p>
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