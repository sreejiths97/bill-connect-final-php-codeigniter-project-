<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> 
          </div><!-- /.col -->
          <!--  .col -->
			  		  
			 
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content --> <section class="content">
      <div class="container-fluid">
        <div class=>
          <div class=>
			  <?php
  
				foreach($data as $row)
				{
				
					
				
					?>

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                

                <h3 class="profile-username text-center"><?php echo  $row->name; ?></h3>

              

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Date of Birth</b> <a class="float-right"><?php echo  $row->dob; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Email</b> <a class="float-right"><?php echo  $row->email; ?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Phone Number</b> <a class="float-right"><?php echo  $row->phone; ?></a>
                  </li>
					<li class="list-group-item">
                    <b>Password</b> <a class="float-right"><?php echo  $row->password; } ?></a>
                  </li>
                </ul>

                <a href="<?php echo site_url(); ?>/user/edit_profile" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    
    <!-- /.content -->
	
  </div>
			  

