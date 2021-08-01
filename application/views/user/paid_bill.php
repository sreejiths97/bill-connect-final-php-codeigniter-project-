<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <div class="col-md-6" style="width: 700px">
            <div class="card">
              <div class="card-header" style="background-color: #007bff">
                <h3 class="card-title" style="color: white">Bill Paid List</h3>

                
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table">
                  <thead>
                    <tr>
                      
                  
						
                      <th>Key Id</th>
						 <th>Bill Date</th>
						 <th>Last Date</th>
						 <th>Amount</th>
						
                      <th style="width: 40px">Status</th>
                    </tr>
                  </thead>
                  <tbody>
					                   <?php
  
  foreach($data2 as $row)
  {
  ?>
                    <tr>
                     
                   
						 <td><?php echo $row->key_id; ?></td>
						 <td><?php echo $row->b_date; ?></td>
						 <td><?php echo $row->l_date; ?></td>
                      <td><?php echo $row->amount; ?></td>
                      <td><span class="badge bg-danger" style="background-color: limegreen"> paid</span></td>
                    </tr>
                    <?php } ?>
                    
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        
        <!-- /.row -->
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>