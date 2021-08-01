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
        
         <?php
  
				foreach($data as $row)
				{
				
					
				
					?>



        <!-- Small Box (Stat card) -->
       
        <div class="row" >
          
        
          <!-- ./col -->
          <div  style="width: 600px">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo  $row->dept_name; ?></h3>

                <p>
					<?php if($row->dept_id == 6) {?>
					Consumer Number:
					<?php }
					else if($row->dept_id == 7) {?>
					Consumer Number:
					<?php } 
					else if($row->dept_id == 8) {?>
					Phone Number:
					<?php } 
					else if($row->dept_id == 12) {?>
					Subscriber Id:
					<?php } 
					else {?>
						Key ID:
					<?php
					}
					echo  $row->key_id; ?></p>
              </div>
              <div class="icon">
				  <i class="fab fa-bitcoin"></i>

				</div>
              <a href="<?php echo site_url(); ?>/user/dept_delete?id=<?php echo $row->key_id ?>" class="small-box-footer">
                Delete info <i class="fas fa-trash-alt"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
        </div>
		  <?php } ?>
        
        </div>
     
    </section>
    <!-- /.content -->
</div>
    
