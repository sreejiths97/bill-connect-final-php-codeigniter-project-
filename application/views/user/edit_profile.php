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
    
    <!-- /.content -->
 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
	
	<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Profile </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" enctype="multipart/form-data" method="post">
				  <?php 
	   		foreach($data as $row)
			{
	   ?>
                <div class="card-body">
					<input type="hidden"  value="<?php echo $row->id; ?>" name="id"> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row->name; ?>" name="name">
                  </div>
					<div class="form-group">
                    <label for="exampleInputEmail1">Date of Birth</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row->dob; ?>" name="dob">
                  </div>
					<div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row->email; ?>" name="email">
                  </div>
					<div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row->phone; ?>" name="phone">
                  </div>
					<div class="form-group">
                    <label for="exampleInputEmail1">Password</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $row->password; ?>" name="password">
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
	<div>
		<div>
			<div>
				</section>
