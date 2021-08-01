<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>My Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contacts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style="font-size: 30px">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
        
              <div class="card bg-light">
               
                <div class="card-body pt-0">
                  <div class="row" style="border-bottom-width: thin" >
                    <div class="col-7">
                      <h2 class="lead"><b><?php
  
				foreach($data as $row)
				{
				
					
				
					?></b></h2>
                   
                      <ul class="ml-4 mb-0 fa-ul text-muted">
						  <table width="100%">
						  <tr> <li class="small"><span class="fa-li"><td><i class="fas fa-user"></i></span> Name</td><td><?php echo  $row->name; ?></td></li></tr>
                        <tr> <li class="small"><span class="fa-li"><td><i class="fas fa-birthday-cake"></i></span> Date of Birth</td><td><?php echo  $row->dob; ?></td></li></tr>
						      <tr> <li class="small"><span class="fa-li"><td><i class="fas fa-envelope"></i></i></span> Email</td><td><?php echo  $row->email; ?></td></li></tr>
						     
                        <tr> <li class="small"><span class="fa-li"><td><i class="fas fa-lg fa-phone"></i></span> Phone </td><td><?php echo  $row->phone; ?> </td></li></tr>
						  <tr>  <li class="small"><span class="fa-li"><td><i class="fas fa-key"></i></span> Password</td><td><?php echo  $row->password; } ?></td></li></tr>
						</table>
                      </ul>
                    </div>
                    
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    
                    <a href="<?php echo site_url(); ?>/user/edit_profile" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Edit Profile
                    </a>
                  </div>
                </div>
              </div>
            </div>
            
            
       
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>