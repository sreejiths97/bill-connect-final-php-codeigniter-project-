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
					<input type="hidden"  value="<?php echo $row->name; ?>" name="name"> 
                  <div class="form-group">
                    <label for="exampleInputEmail1">UPI ID</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  name="accno">
                  </div>
					<div class="form-group">
                    <label for="exampleInputEmail1">Card Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  name="cardno">
                  </div>
					<div class="form-group">
                    <label for="exampleInputEmail1">CVV Number</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  name="cvv">
                  </div>
					<div class="form-group">
                    <label for="exampleInputEmail1">Exp Date</label>
                    <input type="date" class="form-control" id="exampleInputEmail1"  name="exp">
                  </div>
					<div class="form-group">
                    <label for="exampleInputEmail1">U P I</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"  name="upi">
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
