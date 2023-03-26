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
	<link rel="stylesheet" type="text/css" href="css1.css" />
	<link rel="stylesheet" type="text/css" href="css2.css" />
	
	
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
					<div class="col-md-12">
				<?php		
				require_once('../ClassDB.php');

					$db = new classDB;
					$db->connect();
					$db->createaccount();
					
					
				if(isset($_POST['addyearlevel'])){
				$db = new classDB;
				$db->connect();
				$db->add_yearlevel();
	
				}
				?>




						
							  
		</div><!--col end -->
		<div class="col-md-6">
			
						
         </div><!--col end-->           
        </div><!--row end-->        
					
			<?php
				if($_REQUEST['id']){
					$dis='';
				}else{
					$dis='none';
				}
				if($_REQUEST['id']){
					$disp='none';
				}else{
					$disp='';
				}
				
				
				
				?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col (right) -->
		
            <form method="post" action="buttonClick">
            <div class="col-md-3" style="display:<?php echo $disp ?>">
              <div class="box box-warning">
                <div class="box-body">
                  <!-- Date range -->
                  <div id="form">
					
				  <div class="row">
					 <div class="col-md-12">
						  
						  <div class="form-group">
							<label for="date">Create Account</label><br>
								<input type="text" class="form-control" name="first" placeholder="First Name" required>
								<input type="text" class="form-control" name="middle" placeholder="Middle Name" required>
								<input type="text" class="form-control" name="last" placeholder="Last Name" required>
								<input type="text" class="form-control" name="position" placeholder="Position" required>
								<input type="text" class="form-control" name="user" placeholder="Username" required>
								<input type="password" class="form-control" name="pass" placeholder="Password" required>
								<input type="password" class="form-control" name="pass1" placeholder="Re-type Password" required>
								<input type="hidden" value="Enrolment" name="type"/>
						  </div><!-- /.form group -->
					</div>
				  </div>	
               
                  
                  <div class="row ">
                    <div class="col-xs-4 col-xs-offset-2">
                      <button class="btn btn-md btn-primary" id="daterange-btn" name="add" type="submit">
                        Save
                      </button>
					  </div>
					  <div class="col-xs-4">
					  <button class="btn btn-md btn-block" id="daterange-btn" type="reset">
                       Cancel
                      </button>
					  </div>
					 
					  
                   </div>
                   </div>
                  </div><!-- /.form group --><hr>
				</form>	
                </div><!-- /.box-body -->
					
				</div><!-- /.box -->
				
				
				
				 <form method="post">
				<div class="col-md-3" style="display:<?php echo $dis ?>">
              <div class="box box-warning">
                <div class="box-body">
                  <!-- Date range -->
                  <div id="form">
					
				  <div class="row">
					 <div class="col-md-12">
						  
						  <div class="form-group">
							<label for="date">Enter Username & Password</label><br>
								<input type="text" class="form-control" value="<?php echo $_REQUEST['id']?>" name="did" placeholder="Username" required>
								<input type="text" class="form-control" name="dusername" placeholder="Username" required>
								<input type="password" class="form-control" name="pass" placeholder="Password" required>
								<input type="password" class="form-control" name="pass1" placeholder="Re-type Password" required>
								
						  </div><!-- /.form group -->
					</div>
				  </div>	
					<?php
						if(isset($_POST['delete'])){
							$db= new classDB;
							$db->connect();
							$db->deleteuser();
						}
					?>
                  
                  <div class="row ">
                    <div class="col-xs-4 col-xs-offset-2">
                      <button class="btn btn-md btn-primary" id="daterange-btn" name="delete" type="submit">
                        Save
                      </button>
					  </div>
					  <div class="col-xs-4">
					<button class="btn btn-md btn-block" id="daterange-btn" type="reset">
                       Cancel
                      </button>
					  </div>
					 
					  
                   </div>
                   </div>
                  </div><!-- /.form group --><hr>
				</form>	
				</div><!--hide-->
                </div><!-- /.box-body -->
					
			
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



