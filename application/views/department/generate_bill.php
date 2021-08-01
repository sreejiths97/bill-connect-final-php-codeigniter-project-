<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
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
                <h3 class="card-title">Bill Generate</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
		
             
              <form role="form" enctype="multipart/form-data" method="post">
					<div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">User Id</label>
                    <select class="form-control"   name="uid">
						<?php foreach($data as $row) { ?>
						 	 <option value="<?php echo $row->u_id; ?>"><?php echo $row->key_id; ?></option>
   							<?php }  ?>
						</select>
                  </div>
					
					
					<div class="form-group">
                    <label for="exampleInputEmail1">Last Date</label>
                    <input type="date" class="form-control"   name="ldate">
                  </div>
					<div class="form-group">
                    <label for="exampleInputEmail1">Amount</label>
                    <input type="text" class="form-control"   name="amount">
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
		 </div></section>
</div>
