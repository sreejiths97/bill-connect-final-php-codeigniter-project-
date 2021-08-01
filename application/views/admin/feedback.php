<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Latest feedback</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
      <div class="container-fluid">
        
        <!-- Timelime example  -->
        <div class="row">
          <div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">
              <!-- timeline time label -->
              
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-envelope bg-blue"></i>
				    <?php
 
  foreach($data as $row)
  {
  ?>
                <div class="timeline-item">
                  <span class="time"><i class="fas fa-envelope"></i> <?php echo $row->email; ?></span>
                  <h3 class="timeline-header"><a href="#"><?php echo $row->name; ?></a> sent you an feedback</h3>

                  <div class="timeline-body">
                 
					 <h4> <?php echo $row->message; ?></h4>
                  </div>
                  <div class="timeline-footer">
                    <a href="<?php echo site_url(); ?>/Bill_connect/feedback_update?id=<?php echo $row->id ?>" class="btn btn-primary btn-sm">Read</a>
                    <a href="<?php echo site_url(); ?>/Bill_connect/feedback_delete?id=<?php echo $row->id ?>" class="btn btn-danger btn-sm">Delete</a>
                  </div>
                </div>
				<?php } ?>
              </div>
               
              <div>
                <i class="fas fa-clock bg-gray"></i>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
      </div>
      <!-- /.timeline -->

    </section>
</div>