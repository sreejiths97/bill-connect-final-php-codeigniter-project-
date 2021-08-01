
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
 <section>
      <div >
        <div >
          <!-- left column -->
          <div >
			  <!-- Main content --><div style="font-size: 250px;" align="center"> <i class="fas fa-university"></i>
			 <h1> Welcome To <?php
  
				foreach($data as $row)
				{
					echo  $row->dept_name; 
				}
					?></h1>
			  </div>
    			</div>
			</div>
		  </div>
	</section>
    <!-- /.content -->
	
  </div>
