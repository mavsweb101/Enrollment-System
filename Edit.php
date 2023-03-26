
<?php
session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;
error_reporting(0);
	require_once('../ClassDB.php');
?>
<!Doctype html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="css1.css" />
	<link rel="stylesheet" type="text/css" href="css2.css" />
	<style>


</style>
	
	</head>
	
<?php
	include('Header.php');
	
	if(isset($_POST['save'])){
		$db = new classDB;
		$db->connect();
		$db->studupdate();
	}	
?>
		<body style='background:#F2F2F2;'>
	<div class='content-wrapper' style='margin-top:150px;'>
        <div class='container' style='background-color:white;'>
          <!-- Content Header (Page header) -->
        
		<form method='post'>
          <!-- Main content -->
          <section class='content'>
            <div class='row'>
	    
			<div class='col-md-12'>
              <div class='box box-warning'>
                <div class='box-body'>
                  <!-- Date range -->
                  <div id='form'>
					 <input style='margin-bottom:20px;margin-top:10px;' type='button' id='back' value='Back' name='back' class='pull-right btn btn-primary col-lg-1'/>
				
				 
					
							
						  
						 
				
				
               
                  
                
                   </div>
                  </div><!-- /.form group -->
				
                </div><!-- /.box-body -->
					
				</div><!-- /.box -->
            <div class='col-md-3'>
              <div class='box box-warning'>
                <div class='box-body'>
                  <!-- Date range -->
                  <div id='form'>
					
				  <div class='row'>
					 <div class='col-md-12'>
						  
						  <div class='form-group'>
								<label for='date'>Family Name:</label><br>
								<input type='hidden' class='form-control' name='uid' value='<?php echo $_REQUEST["id"]; ?>' required>
								<input type='text' class='form-control' name='upascual' value='<?php echo $_REQUEST["lastname"]; ?>' required>
							
								<label for='date'>Degree/Course:</label><br>
								<select class='form-control' name = 'ubsit' required>
									
										<option><?php echo $_REQUEST["course"]; ?></option>
											<?php	
														
														$db = new classDB;
														$db->connect();
														$db->course();
													?>		
										
								</select>
								
						  </div><!-- /.form group -->
					</div>
				  </div>	
               
                  
                 
                   </div>
                  </div><!-- /.form group -->
				
                </div><!-- /.box-body -->
					
				</div><!-- /.box -->
				
				<div class='col-md-3'>
              <div class='box box-warning'>
                <div class='box-body'>
                  <!-- Date range -->
                  <div id='form'>
					
				  <div class='row'>
					 <div class='col-md-12'>
						  
						  <div class='form-group'>
								<label for='date'>First Name:</label><br>
								<input type='text' class='form-control' name='umarvin' value='<?php echo $_REQUEST["firstname"]; ?>' required>
								<label for='date'>Semester:</label><br>
								<select class='form-control' name = 'usemester' required>
										<option name = 'semester' value=''>Select Semester</option>
										<option name = 'semester' <?php if($_REQUEST["semester"]=='First Sem'){echo "selected";} ?> value='First Sem'>First Sem</option>
										<option name = 'semester' <?php if($_REQUEST["semester"]=='Second Sem'){echo "selected";} ?> value='Second Sem'>Second Sem</option>
										<option name = 'semester' <?php if($_REQUEST["semester"]=='Sum'){echo "selected";} ?> value='Sum'>Sum</option>
												
								</select>
								<label for='date'>Major:</label><br>
								<input type='text' value="<?php echo $_REQUEST['major']?>" class='form-control' name='umajor'>
								
							
						  </div><!-- /.form group -->
					</div>
				  </div>	
               
                  
                
                   </div>
                  </div><!-- /.form group -->
				
                </div><!-- /.box-body -->
					
				</div><!-- /.box -->
				
				<div class='col-md-3'>
              <div class='box box-warning'>
                <div class='box-body'>
                  <!-- Date range -->
                  <div id='form'>
					
				  <div class='row'>
					 <div class='col-md-12'>
						  
						  <div class='form-group'>
								<label for='date'>Middle Name:</label><br>
								<input type='text' class='form-control'  name='ualmario' value='<?php echo $_REQUEST["middlename"]; ?>' required>

								<label for='date'>Address:</label><br>
								<input type='text' class='form-control' name='uaddress' value='<?php echo $_REQUEST["Address"]; ?>'  required>
									<label for='date'>School Year:</label><br>
								<input type='text' class='form-control' name='uschoolyear' value='<?php echo $_REQUEST["sy"]; ?>' required>
								
						  </div><!-- /.form group -->
					</div>
				  </div>	
               
                  
                
                   </div>
                  </div><!-- /.form group -->
				
                </div><!-- /.box-body -->
					
				</div><!-- /.box -->
				<div class='col-md-3'>
              <div class='box box-warning'>
                <div class='box-body'>
                  <!-- Date range -->
                  <div id='form'>
					
				  <div class='row'>
					 <div class='col-md-12'>
						  
						  <div class='form-group'>
								<label for='date'>Year Level:</label><br>
								<select class='form-control' name='uyear' required  >
									<option><?php echo $_REQUEST["yearlevel"]; ?></option>
									<?php	
														
														$db = new classDB;
														$db->connect();
														$db->year_level();
													?>	
								</select>
								
								<label for='date'>Date of Birth:</label><br>
								<input type='date' class='form-control' name='udate' value='<?php echo $_REQUEST["b-day"]; ?>'  required>
								
						  </div><!-- /.form group -->
					</div>
				  </div>	
               
                  
													
                   </div>
                  </div><!-- /.form group -->
			
                </div><!-- /.box-body -->
					
				</div><!-- /.box -->
				
				
				
				
				
			
			 </div><!-- /.row -->
			</section><!-- /.content -->
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
		
	<center><input type='submit' name='save' value='Save' class='btn btn-primary'/><center>
			</form>	
        
		<hr>
		  </div><!-- /.content-wrapper -->
        </div><!-- /.container -->
     
	
	
	

	
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
	  
	  $("#back").click(function(){
		  document.location='StudentRecord'
	  })
</script>
</html>




	