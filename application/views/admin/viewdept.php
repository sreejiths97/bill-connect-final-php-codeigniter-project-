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
              <div class="card-header" style="background-color: #007bff">
                <h2 class="card-title" style="color: white">Department list view</h2>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
					  <th>Sl.no</th>
					  
                    <th>Department Name</th>
                    
                    <th>Email</th>
					 
					  <th>Logo</th>
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
                    <td><?php echo $row->dept_name; ?></td>
                    <td><?php echo $row->dept_email; ?></td>
                    <td> <img width="180" height="100" src="<?php echo base_url(); ?>/assets/deptlogo/<?php echo $row->logo; ?>" /></td>
                    <th><a href="<?php echo site_url(); ?>/Bill_connect/dept_delete?id=<?php echo $row->dept_id ?>&Email=<?php echo $row->dept_email; ?>"><i class="fas fa-trash-alt"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                     <a href="<?php echo site_url(); ?>/Bill_connect/dept_edit?id=<?php echo $row->dept_id; ?>"><i class="fas fa-edit"></i></a></th>

                  </tr>
  <?php
	 $i++;
  }
   ?>
                  <tfoot>
                  <tr>
					  <th>Sl.no</th>
					  
                    <th>Department Name</th>
                    
                    <th>Email</th>
					 
					  <th>Logo</th>
					  <th> </th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
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