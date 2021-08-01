<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              <!-- /.card-header -->
              
              <!-- /.card-body -->
				<div class="card" >
              <div class="card-header"  style="background-color: #007bff" >
                <h3 class="card-title" style="color: white">User list view</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
						<thead>
                  <tr>
					  <th>Sl.no</th>
                    <th>Name</th>
                    <th>DOB</th>
                    <th>Email</th>
					  <th>Phone No</th>
					  <th>Password</th>
					  <th></th>
                  </tr>
                  </thead>
                  <?php
  $i=1;
  foreach($data as $row)
  {
  ?>
  
 <tr>
                    <td><?php echo $i; ?></td> 
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $row->dob; ?></td>
	 				<td><?php echo $row->email; ?></td>
	 				 <td><?php echo $row->phone; ?></td>
	 				 <td>********</td>  
	 <td><a href="<?php echo site_url(); ?>/Bill_connect/user_delete?id=<?php echo $row->id ?>"><i class="fas fa-trash-alt"></i></a></td>
                  
                    
                  </tr>
  <?php
	 $i++;
  }
   ?>
                  <tfoot>
                  <tr>
					  <th>Sl.no</th>
                    
                    <th>Name</th>
                    <th>DOB</th>
                    <th>Email</th>
					  <th>Phone No</th>
					  <th>Password</th>
					  <th></th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            </div>
            <!-- /.card -->

            
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