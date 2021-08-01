<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Card Deatils</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content" style="font-size: 20px">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
        <?php
  
				foreach($data as $row)
				{
				
					
				
					?>
              <div class="card bg-light">
               
                <div class="card-body pt-0">
                  <div class="row" style="border-bottom-width: thin" >
                    <div class="col-7">
                      <h2 class="lead"><b></b></h2>
                   
                      <ul class="ml-4 mb-0 fa-ul text-muted">
						  <table width="100%">
						  	<tr> <li class="small"><span class="fa-li"><td></span> Name</td><td><?php echo  $row->name; ?></td></li></tr>
                        	<tr> <li class="small"><span class="fa-li"><td></span> Account Number</td><td><?php echo  $row->acc_no; ?></td></li></tr>
						      <tr> <li class="small"><span class="fa-li"><td></span>Card Number</td><td><?php echo  $row->card_no; ?></td></li></tr>
						     
                       		 <tr> <li class="small"><span class="fa-li"><td></span> CVV Number </td><td><?php echo  $row->cvv; ?> </td></li></tr>
						  	<tr>  <li class="small"><span class="fa-li"><td></span> EXP date</td><td><?php echo  $row->exp_date; ?></td></li></tr>
							<tr>  <li class="small"><span class="fa-li"><td></span> UPI</td><td><?php echo  $row->upi; ?></td></li></tr>
	 						 <tr>  <li class="small"><span class="fa-li"><td></span> Account Balance</td><td><?php echo  $row->bal;  ?></td></li></tr>
						</table>
                      </ul>
                    </div>
                    
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    
                    <a href="<?php echo site_url(); ?>/user/edit_profile" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Edit card datils
                    </a>
					  
                  </div>
					
                </div>

              </div>
<?php } ?>
            </div>
            
            
       
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
        
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>