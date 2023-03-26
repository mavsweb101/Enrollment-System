<?php
session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
error_reporting(0);
?>
<!Doctype html>
<html>
	<head>


	<style>

</style>

	<link rel="stylesheet" type="text/css" href="css2.css" />
	<link rel="stylesheet" type="text/css" href="css1.css" />

	
	</head>
	
<?php
	include('Header.php');
?>
	

	<div class="content-wrapper" style="margin-top:170px;">
        <div class="container">
          <!-- Content Header (Page header) -->
        

          <!-- Main content -->
          <section class="content">
            <div class="row">
	      <div class="col-md-9">
              <div class="box box-warning">
               
                <div class="box-body">
				<div class="row">
					<div class="col-md-9">
				<?php		
				require_once('../ClassDB.php');

					$db = new classDB;
					$db->connect();
					$db->setstud_id();
					
					

				?>




						
							  
		</div><!--col end -->
		<div class="col-md-6">
			
						
         </div><!--col end-->           
        </div><!--row end-->        
					
			
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
            <form method="post" action="buttonClick">
            <div class="col-md-3">
              <div class="box box-warning">
                <div class="box-body">
                  <!-- Date range -->
                  <div id="form">
					
				  <div class="row">
					 <div class="col-md-12">
						  
						  <div class="form-group">
							<label for="date">Set Student Id No.</label><br>
								<input type="text" class="form-control" name="year" placeholder="Year Ex:18" required>
								<input type="text" class="form-control" name="number" placeholder="Number" required>
								
						  </div><!-- /.form group -->
					</div>
				  </div>	
               
                  
                  <div class="form-group">
                    
                      <button class="btn btn-lg btn-block btn-primary" id="daterange-btn" name="set_add" type="submit">
                        Set ID
                      </button>
					  <button class="btn btn-lg btn-block" id="daterange-btn" type="reset">
                       Cancel
                      </button>
					  
					  
                   </div>
                  </div><!-- /.form group --><hr>
				</form>	
                </div><!-- /.box-body -->
				
				</div><!-- /.box -->
            </div><!-- /.col (right) -->
			
			
          </div><!-- /.row -->
	  
            
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
	
     <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap-transition.js"></script>
    <script src="bootstrap/js/bootstrap-alert.js"></script>
    <script src="bootstrap/js/bootstrap-modal.js"></script>
	 <script src="jquery/jquery.dataTables.min.js"></script>
    <script src="jquery/dataTables.bootstrap.min.js"></script>
<script>   
   $(function () {
        $("#data").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": false,
          "searching": false,
          "ordering": true,
          "info": true,
          "autoWidth": false
        });
      });
</script>
</body>
</html>



