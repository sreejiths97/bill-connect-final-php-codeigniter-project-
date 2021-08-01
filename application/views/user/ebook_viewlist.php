<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
			  <table class="table table-bordered text-center">
                  <tbody><tr>
               
                    <th> <a  href="<?php echo site_url(); ?>/user/e_book_barchart" <button type="button" class="btn btn-block btn-primary">monthly list</button></a></th>
                  </tr>
         </tbody></table>
          </div>
          
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
	 <td><a href="<?php echo site_url(); ?>/Bill_connect/user_delete?id=<?php echo $row->id ?>"><i class="fas fa-trash-alt"></i></a></td>
                  
                    
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