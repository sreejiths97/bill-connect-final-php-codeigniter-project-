
	
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
       
        <!-- /.row -->

       
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8">
            <!-- MAP & BOX PANE -->
            
            <!-- /.card -->
            
            <!-- /.row -->

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Latest Orders</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
				
              <!-- /.card-header -->
              <form method="post" action="bill_pay">
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Order ID</th>
                      <th>deptid</th>
                      <th>key_id</th>
                      <th>bill date</th>
                      <th>lastdate</th>
                      <th>amount</th>
                    </tr>
                    </thead>
                    <tbody>
                    	<?php
  				$a = 0;
				foreach($data as $row)
				{
					
					?>
                    <tr>
                    	<td><input type="checkbox" name="bill_id[]" value="<?php echo  $row->bill_id;  ?>" ></td>
                      <td><a href="pages/examples/invoice.html"><?php if($row->dept_id == 6) {?>
					KSEB
					<?php }
					else if($row->dept_id == 7) {?>
					KWA
					<?php } 
					else if($row->dept_id == 8) {?>
					BSNL
					<?php } 
					else if($row->dept_id == 12) {?>
					K-PHONE
					<?php } 
					else {?>
						DEPT
					<?php
					}
					?></a></td>
                      <td><?php echo  $row->key_id;  ?></td>
                      
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo  $row->l_date;  ?></div>
                      </td>
                      <td><?php echo  $row->b_date;  ?></td>
                      <td><span class="badge badge-success"><?php echo  $row->amount;  ?></span></td>
                   </tr>
                   <?php
					$a++;
				}
				
					?>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
				  <?php 
				  	if($a != 0)
						
					{
					
				  ?>
                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                
                <input type="submit" name="submit" value="Pay" class="btn btn-sm btn-info float-right">
				  
				  <?php }  else{ echo "NO BILL FOUND";
					}?>
				 
              </div>
            </form>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

         
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <section class="content">
      <div class="container-fluid">
        <div >
          
          <div >
         
			  
					 :	<br>
					:	<br>
					 	<br>

				 
    			</div>
			</div>
		  </div>
	</section>
    <!-- /.content -->
	
  </div>

			  

