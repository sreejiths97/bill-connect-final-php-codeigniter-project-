<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
       
			

        <div class="row">
			 <?php
  
				foreach($data as $row)
				{
				
					
				
					?>
     
          <div class="col-md-4">
            <!-- Widget: user widget style 2 -->
            <div class="card card-widget widget-user-2">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-warning">
            
                
                <h5>Card Details</h5>
              </div>
              <div class="card-footer p-0">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      UPI ID <span class="float-right badge bg-primary"><?php echo  $row->acc_no; ?></span>
                    </a>
                  </li>
                   <li class="nav-item">
                    <a href="#" class="nav-link">
                      Card Number <span class="float-right badge bg-primary"><?php echo  $row->card_no; ?></span>
                    </a>
                  </li>
					  <li class="nav-item">
                    <a href="#" class="nav-link">
                      CVV <span class="float-right badge bg-primary"><?php echo  $row->cvv; ?></span>
                    </a>
                  </li>
                  
					  <li class="nav-item">
                    <a href="#" class="nav-link">
                     Expiry Date <span class="float-right badge bg-primary"><?php echo  $row->exp_date; ?></span>
                    </a>
                  </li>
                  
					  <li class="nav-item">
                    <a href="#" class="nav-link">
                      UPI Pin <span class="float-right badge bg-primary"><?php echo  $row->upi; ?></span>
                    </a>
                  </li>
                    <li class="nav-item">
                    <a href="#" class="nav-link">
                      Account Balance <span class="float-right badge bg-primary"><?php echo  $row->bal; ?></span>
                    </a>
                  </li>
                  
                </ul>
				  <div class="card-footer">
                  <div class="text-right">
                    
                    <a  href="<?php echo site_url(); ?>/user/card_delete?id=<?php echo $row->id ?>" class="btn btn-sm btn-primary">
                      <i class="fas fa-trash-alt"></i> Delete card datils
                    </a>
					  
                  </div>
					
                </div>
              </div>
            </div>
            <!-- /.widget-user -->
          </div>
          <?php } ?>
        </div>
        <!-- /.row -->

        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
  </div>