<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
        <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
    <!-- /.content -->
	<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Department </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" enctype="multipart/form-data" method="post">
				  <?php 
	   		foreach($data as $row)
			{
	   ?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Department Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row->dept_name; ?>" name="deptname">
                  </div>
					<div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row->dept_email; ?>" name="Email">
                  </div>
                  
                
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
				  <?php } ?>
				  <?php echo validation_errors('<div style="color:red;">','</div>');?>
              </form>
            </div>
					</div>
			</div>
		  </div>
	</section>
  </div>
