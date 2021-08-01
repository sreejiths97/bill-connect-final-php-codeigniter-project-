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
                <h3 class="card-title">Add Card Deatils </h3>
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
                    <label for="exampleInputEmail1">Select Department</label>
                    <select class="form-control" id="exampleInputEmail1"  name="deptid">
						 	 <option value="6">kseb</option>
   							 <option value="8">bsnl</option>
   							 <option value="7">kwa</option>
   							 <option value="12">kpnone</option>
						</select>
                  </div>
					<div class="form-group">
                    <label for="exampleInputEmail1">Key id</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  name="keyid">
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
