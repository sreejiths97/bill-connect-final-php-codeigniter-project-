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
                <h3 class="card-title">Add  Department </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" enctype="multipart/form-data" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Department Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Department Name" name="deptname">
                  </div>
					<div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" name="Email">
                  </div>
					<div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="password" name="password">
                  </div>
                  
                 <div class="form-group">
                    <label for="exampleInputEmail1">file</label>
                    <input type="file" class="form-control" id="exampleInputEmail1" placeholder="file upload" name="logo">
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
				  <?php echo validation_errors('<div style="color:red;">','</div>');?>
              </form>
            </div>
			</div>
			</div>
		  </div>
	</section>
  </div>
