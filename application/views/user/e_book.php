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
                <h3 class="card-title">E-Book </h3>
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
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  name="title">
                  </div>
					
					
					<div class="form-group">
                    <label for="exampleInputEmail1">Date</label>
                    <input type="date" class="form-control" id="exampleInputEmail1"  name="date">
                  </div>
					<div class="form-group">
                    <label for="exampleInputEmail1">Amount</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  name="amount">
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
		 </div></section>
</div>
