<div class="content-wrapper">
	
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
         <table class="table table-bordered text-center">
                  <tbody><tr>
                    <th> <a  href="<?php echo site_url(); ?>/user/e_book_view" <button type="button" class="btn btn-block btn-primary"> full list</button></a></th>
              </a></th>
                  </tr>
         </tbody></table>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>


     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
    <!-- /.content -->
	<div class="card card-primary">
              
		
	
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" enctype="multipart/form-data" method="post">
				     <div class="card-body">
						  <?php 
	   		foreach($data1 as $row)
			{
	          ?>
					<input type="hidden"  value="<?php echo $row->id; ?>" name="id"> 
			<?php } ?>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Starting Date</label>
                    <input type="date" class="form-control" id="exampleInputEmail1"  name="stdate" required>
                  </div>
					
					
					<div class="form-group">
                    <label for="exampleInputEmail1">Ending Date</label>
                    <input type="date" class="form-control" id="exampleInputEmail1"  name="enddate" required>
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
		 <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              
              <!-- /.card-header -->
              
              <!-- /.card-body -->
				<div class="card">
              <div class="card-header">
                <h3 class="card-title">Expense Book</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
						<thead>
                  <tr>
					  <th>Sl.no</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Amount</th>
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
                    <td><?php echo $row->title; ?></td>
                    <td><?php echo $row->date; ?></td>
	 				<td><?php echo $row->amount; ?></td>
	 
                  
                    
                  </tr>
  <?php
	 $i++;
  }
   ?>
                  <tfoot>
                  <tr>
					   <th>Sl.no</th>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Amount</th>
					
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
</div>